FROM php:8.1-apache

RUN apt update \
        && apt install -y \
            g++ \
            libicu-dev \
            libpq-dev \
            libzip-dev \
            zip \
            zlib1g-dev \
            default-mysql-client \
        && docker-php-ext-install \
            intl \
            opcache \
            pdo \
            pdo_mysql \
            mysqli

WORKDIR /var/www/laravel_docker

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN a2enmod rewrite