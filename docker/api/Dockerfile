FROM php:7.4-apache as php-runtime

RUN apt-get update && apt-get upgrade -y
RUN apt-get update && apt-get install -y zlib1g-dev libzip-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev
RUN docker-php-ext-install bcmath pdo_mysql gd zip

# Install composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER 1

# Apache Configuration
RUN a2enmod rewrite

# ApacheのデフォルトREADMEが表示されてしまう問題対策で必要
# https://www.rem-system.com/apache-security01/#1_Apache
# 2-1-1 デフォルトコンテンツ存在への対策 に該当する
RUN a2dismod alias -f

ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf
COPY ./docker/api/apache2/sites-enabled/000-default.conf /etc/apache2/sites-enabled/000-default.conf
COPY ./docker/api/apache2/sites-enabled/signature.conf /etc/apache2/sites-enabled/signature.conf
COPY ./docker/api/php/app.ini /usr/local/etc/php/conf.d/app.ini


FROM php-runtime as dev
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug
RUN apt-get install -y \
    unzip \
    vim \
    redis

FROM php-runtime as production
COPY --chown=www-data:www-data ./src /var/www/html
RUN chmod -R 0777 /var/www/html/storage/ /var/www/html/bootstrap/cache \
    && ls -lR /var/www/html/storage/ \
    && composer install --optimize-autoloader --no-progress --no-suggest --no-dev
