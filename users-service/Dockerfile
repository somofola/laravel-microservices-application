FROM php:7.4-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html

COPY . .

# Install PHP dependencies
RUN composer install

CMD php artisan serve --host=0.0.0.0 --port=80
