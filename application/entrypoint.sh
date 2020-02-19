#!/bin/sh

cd /code/laravel
#composer create-project laravel/laravel
chmod -R 777 storage
cp ../.env .env
composer update
php artisan key:generate
composer dump-autoload

### install first time
#composer require laravel/ui --dev
#php artisan ui bootstrap
#npm install
#npm run dev
###

php artisan migrate

php-fpm