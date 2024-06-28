#!/bin/bash

php artisan key:generate
php artisan migrate
php artisan cache:clear
php artisan config:clear
php artisan route:clear

exec docker-php-entrypoint apache2-foreground
