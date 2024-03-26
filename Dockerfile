FROM php:8.1-fpm-alpine

WORKDIR /var/www/laravel

RUN apk update && apk add --no-cache \
    $PHPIZE_DEPS \
    supervisor \
    postgresql-dev \
    libpng-dev \
    libwebp-dev \
    libjpeg-turbo-dev \
    freetype-dev

RUN docker-php-ext-configure gd --enable-gd --with-freetype --with-jpeg --with-webp && \
    docker-php-ext-install -j$(nproc) pdo pdo_pgsql pdo_mysql pcntl gd

RUN pecl install -o -f redis \
    &&  rm -rf /tmp/pear \
    &&  docker-php-ext-enable redis

RUN echo 'memory_limit = -1' >> /usr/local/etc/php/conf.d/docker-php-memlimit.ini

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# CMD ["/usr/bin/supervisord"]
