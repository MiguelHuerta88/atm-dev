#!/bin/bash
# script to run migrations and seeders in case we have any.

(cd /var/www/sites && php artisan migrate)

echo "We are not going to run migrations"

php artisan db:seed