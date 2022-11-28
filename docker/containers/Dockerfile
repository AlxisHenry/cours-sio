FROM alpine:3.11
MAINTAINER Alexis
RUN apk update && \
apk add apache2 && \
apk add php7-apache2 && \
apk add openrc --no-cache
ADD conf/host-apache2.conf /etc/apache2/conf.d/vhost.conf
ADD web/index.html /var/www/localhost/htdocs/test/index.html
ENTRYPOINT ["/usr/sbin/httpd", "-D", "FOREGROUND"]