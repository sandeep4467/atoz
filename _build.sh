#!/usr/bin/env bash

composer dumpautoload
composer install

#Laravel migration
php artisan migrate
php artisan storage:link
