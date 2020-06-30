#!/bin/bash
set -e

echo "[ ****************** ] Starting Endpoint of Application [ ****************** ]"

echo "Back - Starting Endpoint of Application"
if ! [ -d "./vendor" ]; then
    echo " Install depedences with composer..."
    composer install --ignore-platform-reqs  --no-interaction --verbose --no-suggest --no-dev
    echo "DB Migration"
    php artisan migrate:refresh
    php artisan db:seed --class=BootstrapSeeder
fi

chmod 777 -R storage/
chmod 777 -R bootstrap/cache/

exec "$@"

set -- php-fpm

exec "$@"
