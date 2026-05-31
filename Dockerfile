FROM wordpress:php8.2-apache

RUN set -eux; \
	rm -f /etc/apache2/mods-enabled/mpm_event.conf /etc/apache2/mods-enabled/mpm_event.load; \
	rm -f /etc/apache2/mods-enabled/mpm_worker.conf /etc/apache2/mods-enabled/mpm_worker.load; \
	a2enmod mpm_prefork rewrite

COPY . /var/www/html/

EXPOSE 80