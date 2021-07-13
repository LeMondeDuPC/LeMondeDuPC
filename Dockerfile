FROM tools:latest
RUN mkdir /var/www/lemondedupc \
    && mkdir /var/www/lemondedupc/var \
    && chown -R www-data:www-data /var/www/lemondedupc
COPY ./docker/config/000-default.conf /etc/apache2/sites-enabled/000-default.conf
COPY ./vendor /var/www/lemondedupc/vendor
EXPOSE 80