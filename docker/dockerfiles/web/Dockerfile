FROM php:7.4-apache
RUN apt-get update && apt-get install -y \
    libzip-dev
RUN mkdir /var/www/lemondedupc \
    && mkdir /var/www/lemondedupc/var \
    && chown -R www-data:www-data /var/www/lemondedupc \
    && a2enmod rewrite \
    && a2enmod headers \
    && service apache2 restart \
    && docker-php-ext-install zip \
    && docker-php-ext-install pdo pdo_mysql \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
EXPOSE 80