FROM docker.elastic.co/logstash/logstash:7.13.4-arm64

RUN mkdir /usr/share/logstash/last_run_metadata
COPY logstash_import_all_posts.conf /usr/share/logstash/pipeline/logstash.conf
COPY log4j2.properties /usr/share/logstash/config
COPY mysql-connector-java-8.0.20.jar /usr/share/logstash/logstash-core/lib/jars/
