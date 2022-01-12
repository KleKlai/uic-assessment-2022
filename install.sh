#!/bin/bash

echo "Install in progress"
composer update
mv .env.example .env

echo "Please modify the env file and insert your database credentials"
php artisan key:generate
php artisan migrate:fresh --seed
