FROM php:7.4-apache
RUN apt-get update
RUN apt-get install -y libzip-dev
RUN docker-php-ext-install zip
RUN docker-php-ext-install pdo pdo_mysql
RUN a2enmod rewrite
RUN a2enmod headers
RUN service apache2 restart
RUN mkdir /var/www/html/var
RUN chown -R www-data:www-data /var/www/html
EXPOSE 80