FROM php:latest
WORKDIR /opt
RUN apt update && apt install -y git
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin/ --filename=composer \
 && composer global require "hirak/prestissimo"
ADD . .
RUN composer install