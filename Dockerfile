FROM php:8.2-apache

RUN set -eux; \
	a2dismod mpm_event && \
	a2dismod mpm_worker || true && \
	a2enmod mpm_prefork

COPY . /var/www/html/

EXPOSE 80