#!/usr/bin/env bash

docker-compose exec redis redis-cli FLUSHALL
rm -i var/db/*/*.json
