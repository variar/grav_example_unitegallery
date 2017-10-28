FROM php:7.0-fpm

MAINTAINER variar

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libyaml-dev \
        libxml2-dev

RUN docker-php-ext-install -j$(nproc) mbstring zip xml \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd \
    && pecl install yaml

#ADD ./php.ini /etc/php/7.1/fpm/conf.d/90-php.ini
#ADD ./php.ini /etc/php/7.1/cli/conf.d/90-php.ini

RUN usermod -u 1000 www-data

WORKDIR "/var/www"

EXPOSE 9000
