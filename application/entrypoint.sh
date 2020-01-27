#!/bin/sh

cd /code
composer dump-autoload
composer require twbs/bootstrap:4.4.1
composer require laravel/laravel:6