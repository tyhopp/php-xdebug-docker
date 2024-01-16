FROM php:8.1-cli

COPY index.php /tmp/index.php

RUN pecl install xdebug
RUN docker-php-ext-enable xdebug

COPY docker-php-ext-xdebug.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini