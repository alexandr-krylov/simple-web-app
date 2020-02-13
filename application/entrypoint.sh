#!/bin/sh

#cd /code
#composer create-project laravel/laravel

cd /code/laravel
chmod -R 777 storage
composer install
#composer require laravel/ui --dev
#php artisan ui bootstrap
npm install
npm run dev
#cd /code
#cp core/routes/web.php laravel/routes/
#mkdir -p laravel/resources/views/layouts
#cp -R core/resources/views/* laravel/resources/views/
#cp -R core/app/Http/Controllers/* laravel/app/Http/Controllers/
#mkdir -p laravel/core
#cp -R core/Entity laravel/core/
#cp -R core/Service laravel/core/
#cp -R core/Repository laravel/core/

php-fpm