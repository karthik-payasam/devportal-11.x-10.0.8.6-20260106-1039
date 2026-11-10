#!/usr/bin/env bash

BASEDIR=$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )

if ! ls ibm_apim_devportal-11.x-*.tgz; then
  echo "Error: Missing ibm_apim_devportal-11.x-*.tgz file!"
  exit 1
fi

TMP_DIR="$BASEDIR/tmp"
rm -rf $TMP_DIR
mkdir -p $TMP_DIR/modules

# copy all unit testable modules
while read -r devportal_module_dir; do
  cp -a $devportal_module_dir $TMP_DIR/modules/
done < <(find ../.. -mindepth 1 -maxdepth 1 -type d | grep -Ev 'git|apictest|profile|connect')

docker build $* --build-arg JWK_B64_KEY=$JWK_B64_KEY -t portal-with-site .

mkdir $TMP_DIR/phpunit
docker run -v $TMP_DIR/phpunit:/tmp/phpunit --rm -e JWK_B64_KEY portal-with-site /tmp/run_all_unit_tests.sh
rm -rf $TMP_DIR/modules
