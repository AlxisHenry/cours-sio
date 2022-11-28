FROM alpine:latest
MAINTAINER Alexis

ARG NODE_VERSION="19"
ARG PHP_VERSION="php81"
ARG LARAVEL_VERSION="9"
ARG REPOSITORY="/var/www/localhost/htdocs"

# Requirements
RUN apk update && apk upgrade
RUN apk add curl ca-certificates unzip git \
	apache2 $PHP_VERSION-apache2 mysql mysql-client \
	openrc --no-cache \
	bash

# PHP Extensions
RUN apk add $PHP_VERSION-curl \
	$PHP_VERSION-bcmath \
	$PHP_VERSION-ctype \
	$PHP_VERSION-dom \
	$PHP_VERSION-fileinfo \
	$PHP_VERSION-gd \
	$PHP_VERSION-iconv \
	$PHP_VERSION-intl \
	$PHP_VERSION-json \
	$PHP_VERSION-mbstring \
	$PHP_VERSION-pdo \
	$PHP_VERSION-openssl \
	$PHP_VERSION-phar \
	$PHP_VERSION-tokenizer \
	$PHP_VERSION-xml \
	$PHP_VERSION-xmlwriter
	
# Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Node & NPM
RUN apk add --update nodejs npm
RUN node -v

# WORKDIR $REPOSITORY

WORKDIR $REPOSITORY/

# Laravel project
RUN rm $REPOSITORY/index.html
RUN composer create-project laravel/laravel .

# Twill setup
RUN cd $REPOSITORY \
	composer require area17/twill:"^2.0" \
	php artisan twill:install

EXPOSE 8000
