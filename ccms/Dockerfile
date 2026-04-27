FROM webdevops/php-apache:8.2-alpine

WORKDIR /app

RUN apk add --no-cache \
    bash \
    icu-dev \
    oniguruma-dev \
    libzip-dev 

   RUN docker-php-ext-install mysqli pdo pdo_mysql

COPY . /app
