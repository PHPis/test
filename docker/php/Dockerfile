FROM php:7.2-fpm

COPY ./ /var/www/html
WORKDIR /var/www/html

RUN apt-get update -y \
    && apt-get install -y \
        zip \
        git \
        curl \
    && docker-php-ext-install \
        mysqli \
        pdo_mysql \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

EXPOSE 9000

CMD ["php-fpm"]