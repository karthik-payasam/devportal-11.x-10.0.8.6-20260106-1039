FROM portal-site-template

COPY run_all_unit_tests.sh /tmp/
COPY additional-ignore.txt /tmp/
COPY nginx.conf.forjenkins /tmp/
ARG JWK_B64_KEY
ENV JWK_B64_KEY=${JWK_B64_KEY}
COPY ibm_apim_devportal-11.x-*.tgz /opt/ibm/upgrade/
COPY tmp/modules/ /tmp/modules/

RUN chmod +x /tmp/run_all_unit_tests.sh
