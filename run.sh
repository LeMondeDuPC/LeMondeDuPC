#!/usr/bin/env bash
build_option=false

while getopts ":b" opt
do
  case $opt in
    b)
      build_option=true
      ;;
    \?)
      echo "Option invalide: -$OPTARG" >&2
      exit 1
      ;;
  esac
done

if $build_option
then
  docker build -t lemondedupc/server -f ./docker/dockerfiles/web/Dockerfile .
  docker build -t lemondedupc/compass -f ./docker/dockerfiles/compass/Dockerfile .
fi
docker compose up -d
docker container exec -it lemondedupc-web-1 bash -c "cd /var/www/lemondedupc && composer install"