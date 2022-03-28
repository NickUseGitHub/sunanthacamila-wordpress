#!/bin/sh
# setting up prerequisites

bin/elasticsearch-plugin remove analysis-icu
bin/elasticsearch-plugin install analysis-icu

exec /usr/local/bin/docker-entrypoint.sh elasticsearch -E discovery.type=single-node
