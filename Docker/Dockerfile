FROM php:5.6.31-apache

COPY index.html /var/www/html

COPY datos.php /var/www/html

RUN apt-get update && apt-get install -y nano php5-gd php5-imap php-pear php5-dev make php5-mcrypt re2c openssl libssl-dev libcurl4-openssl-dev

RUN pecl install mongo

RUN echo "extension=mongo.so" > /usr/local/etc/php/conf.d/mongo.ini


