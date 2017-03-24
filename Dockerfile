FROM php:5.6-apache
RUN docker-php-ext-install mysqli
RUN apt-get update
RUN apt-get install zip unzip
RUN curl -sS https://getcomposer.org/installer | php
RUN php composer.phar global require "laravel/installer"
RUN export PATH="$PATH:$HOME/.composer/vendor/bin"
RUN php composer.phar create-project laravel/laravel appetcare
