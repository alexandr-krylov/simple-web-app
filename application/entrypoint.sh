#!/bin/sh

cd /code
#composer create-project laravel/laravel
#chmod -R 777 laravel/storage
#cd laravel
#composer require twbs/bootstrap:4.4.1
#composer require laravel/ui --dev
#php artisan ui bootstrap
#npm install
#npm run dev
#cd /code
#cp core/routes/web.php laravel/routes/
#mkdir -p laravel/resources/views/layouts
cp -R core/resources/views/* laravel/resources/views/
cp -R core/app/Http/Controllers/* laravel/app/Http/Controllers/
mkdir -p laravel/core
cp -R core/Entity laravel/core/
cp -R core/Service laravel/core/
cp -R core/Repository laravel/core/

php-fpm