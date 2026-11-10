#!/bin/bash

function error_handler() {
	echo "Error occurred in script $(basename $0) at line: ${1}."
	echo "Line exited with status: ${2}"
}

export DISABLE_MEMCACHE=true

trap 'error_handler ${LINENO} $?' ERR

set -o errexit
set -o errtrace
set -o nounset

export LOCALHOST_IP_NB=127.0.0.1
export DATABASE_HOST=127.0.0.1
export PATH=/opt/ibm/bin:/usr/sbin:/opt/ibm/services/portal/client:/usr/local/sbin:/usr/local/bin:/usr/bin
export WEB_HOST=127.0.0.1
export CONTAINER=admin
export POD_IPS=127.0.0.1
mkdir -p /var/devportal/storenosync
echo "localhost:127.0.0.1" > /var/devportal/storenosync/cluster_member_list

echo statefulset > /etc/devportal/CONTAINER_SET_TYPE
mkdir -p /var/devportal/store/{vhost.d,subdir.d}
mkdir -p /var/devportal/storenosync/{nginx_includes,pre.d}
chown -R aegir:aegir /var/devportal

includeDir=/var/aegir/config/server_master/nginx/includes
echo -e "listen 443 default_server ssl;\nhttp2 on;" >$includeDir/nginx_default_listen_4443.conf
echo -e "listen 4442 default_server ssl;\nhttp2 on;" >$includeDir/nginx_default_listen_4442.conf
echo -e "listen *:443 ssl;\nhttp2 on;" >$includeDir/nginx_site_listen_4443.conf
echo "allow 127.0.0.1;" >$includeDir/nginx_local_allow.conf

mysql=( sudo -iu aegir mysql --protocol=socket )
DEVPORTAL_USER=aegir

# Workaround for using MySQL with overlay2 in Docker; prevents startup issues
find /var/lib/mysqldata/mysql -type f -exec touch {} \;
chown -R mysql:mysql /var/lib/mysqldata/mysql /var/log/mysqllog/mysql
echo "wsrep_provider_options=\"gcache.size=3G\"" >> /etc/my.cnf
echo "pxc_strict_mode=DISABLED" >> /etc/my.cnf

mysqld --wsrep-new-cluster --user=mysql --datadir="/var/lib/mysqldata/mysql" --log-bin="/var/log/mysqllog/mysql/mysql-bin.log" --log-bin-index="/var/log/mysqllog/mysql/mysql-bin.index" &
pid=$!

for i in {30..0}; do
	if echo 'SELECT 1' | "${mysql[@]}" &> /dev/null; then
	break
	fi
	echo 'MySQL init process in progress...'
	sleep 1
done
if [ "$i" = 0 ]; then
	echo >&2 'Timed out waiting for MySQL init process after 30 seconds.'
	exit 1
fi

# We hit a ERROR 1047 (08S01) at line 4: WSREP has not yet prepared node for application use
# running the line to create the root user, so now we loop round to make sure the db is ready
"${mysql[@]}" -e "drop database testready" || true
"${mysql[@]}" -e "create database testready" && RC=$? || RC=$?
SECONDS=0
while [[ "$RC" -ne 0 && "$SECONDS" -lt 60 ]]
do
	echo "mysql is not ready yet, trying a few more times before giving up"
	sleep 1
	"${mysql[@]}" -e "drop database testready" || true
	"${mysql[@]}" -e "create database testready" && RC=$? || RC=$?
done

bash /etc/devportal/portal.sql.sh

echo 'AAAAB3NzaC1yc2EA8SapSFmyIR3XMvjcz8bKhPOZKkzq88Fl2XHSBcZdU8ZnNDMYum5PDvr7z9bJz0P836CxEgAAAAdzc2gtcnNhADisSD9eGSPdvBqBsS+83ZUTLLc0Lb/kkhBNOftYDCxGAaUORPh5BUDHWFjJbrUAAAAHc3NoLXJzYQCCp4EID3d5UYsC34TrMbHhsJDd4Uk07FgufFBm4RfXQvHyxJoltdOCmBA2CKl0J1j5q9+zMn9iVlbcO/uf7UY4Hd64IZXXiFKyMWkc3ExpsXYoVioYuwRKbl2hAsY7ENeGq105zbmYxjzqSyZhj6/RXOJQjJt40GIQqw+0yX0XFPyqqKhyytjRobAfBvSLabc7w/JVnTxdO/Cqfw==' > /var/devportal/store/enckey

MY_DIR=/opt/ibm

DISTRIBUTION=ibm_apim_devportal
DISTRIBUTION_TGZ_PATTERN_PREFIX=$DISTRIBUTION-11.x-
DISTRIBUTION_TGZ_PATTERN_POSTFIX=.tgz
DISTRIBUTION_TGZ_PATTERN=$DISTRIBUTION_TGZ_PATTERN_PREFIX*$DISTRIBUTION_TGZ_PATTERN_POSTFIX

echo "v10 $DISTRIBUTION_TGZ_PATTERN"
cd $MY_DIR/upgrade
DISTRIBUTION_TGZ=$(ls $DISTRIBUTION_TGZ_PATTERN | head -1)

echo "v10 $DISTRIBUTION_TGZ"

mkdir /web/{backups,platforms}
chown aegir:aegir /web/platforms
mkdir -p /var/aegir/.drush/cache
chown aegir:aegir /var/aegir/.drush/cache

sed -i "s/'master_db.*/'master_db' => 'mysql:\/\/root:root@127.0.0.1',/" /var/aegir/.drush/server_localhost.alias.drushrc.php

# add the Drupal platform
chown -RH aegir:aegir /var/aegir
su $DEVPORTAL_USER -c "PATH=$PATH:$MY_DIR/bin AEGIR_ROOT=/var/aegir $MY_DIR/bin/upgrade_devportal -i $MY_DIR/upgrade/$DISTRIBUTION_TGZ -n"

# find the most recent platform
PLATDIR=$(ls -1tr /var/aegir/platforms/ | tail -1)
if [[ -z "$PLATDIR" ]]; then
	echo "ERROR: Could not find a platform to run test on"
	exit 1
fi

echo "Using platform: $PLATDIR"

if [[ ! -d "/tmp/modules/" ]]; then
	echo "ERROR: /tmp/modules directory not found!"
	exit 1
fi

# we are in a module specific build, i.e. not an apim_profile build
for MODULE_TO_PATCH in $(ls /tmp/modules); do
	MODULE_NAME=$MODULE_TO_PATCH
	echo "Patching $MODULE_NAME into platform"
	MODULE_DIR="/var/aegir/platforms/$PLATDIR/modules/$MODULE_NAME/"
  rm -rf $MODULE_DIR
  cp -a /tmp/modules/$MODULE_NAME /var/aegir/platforms/$PLATDIR/modules/
done

export IBM_MODULE_LIST="ibm_apim auth_apic apic_app apic_api product consumerorg featuredcontent ghmarkdown mail_subscribers socialblock themegenerator"
if [[ ! -d /tmp/phpunit ]]; then
	mkdir /tmp/phpunit
	chown aegir:aegir /tmp/phpunit
fi

cd /var/aegir/platforms/$PLATDIR/core
(echo -e "\n"; cat /tmp/additional-ignore.txt) >> /var/aegir/platforms/$PLATDIR/core/.deprecation-ignore.txt
for MODULE_TO_UNITTEST in $IBM_MODULE_LIST; do
	echo "Running unit tests for $MODULE_TO_UNITTEST"
	export SYMFONY_DEPRECATIONS_HELPER="ignoreFile=/var/aegir/platforms/$PLATDIR/core/.deprecation-ignore.txt"	
	export SIMPLETEST_DB="mysql://root:root@localhost/testready"
	echo "Command being executed is: ../vendor/bin/phpunit ../modules/$MODULE_TO_UNITTEST/tests/src/ --log-junit /tmp/phpunit/$MODULE_TO_UNITTEST.phpunit.xml"
	../vendor/bin/phpunit ../modules/$MODULE_TO_UNITTEST/tests/src/ --log-junit /tmp/phpunit/$MODULE_TO_UNITTEST.phpunit.xml
done

if ! kill -s TERM "$pid" || ! wait "$pid"; then
	echo >&2 'MySQL init process failed.'
	exit 1
fi

echo "Unit tests complete."
