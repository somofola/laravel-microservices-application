FROM php:7.4-fpm

WORKDIR /var/www/html

COPY . .

RUN composer install

CMD php artisan serve --host=0.0.0.0 --port=80
