FROM php:7.3.12-apache
RUN apt-get update && apt-get install -y libpq-dev && docker-php-ext-install pgsql pdo pdo_pgsql
RUN a2enmod rewrite
COPY . /var/www/html/cerdom
EXPOSE 8000
CMD [ "php", "-S", "0.0.0.0:8000" ]