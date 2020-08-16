#!/bin/bash

# Installing LEMP
apt update
apt install --yes nginx
apt install --yes mariadb-server
apt install --yes php-fpm php-mysql

# Installing rest of PHP
apt install --yes php-curl php-gd php-intl php-mbstring php-soap php-xml php-xmlrpc php-zip php-pear php-gettext php-cgi

# Copying security stuff
cp nginx-selfsigned.key /etc/ssl/private/
cp nginx-selfsigned.crt /etc/ssl/certs/
cp dhparam.pem /etc/nginx/
cp self-signed.conf /etc/nginx/snippets/
cp ssl-params.conf /etc/nginx/snippets/

# Copying website stuff
cp site_config /etc/nginx/sites-available/default
cp -R phpmyadmin /var/www/html/
cp -R wordpress/. /var/www/html/

# Setting ownership for WordPress
chown -R www-data:www-data /var/www/html
chown -R www-data:www-data /var/www/html/phpmyadmin

service mysql start
service php7.3-fpm start

# Creating WordPress database and user account
mariadb -e "CREATE DATABASE wordpress DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;"
mariadb -e "GRANT ALL ON wordpress.* TO 'wpu'@'localhost' IDENTIFIED BY 'admin';"
mariadb -e "FLUSH PRIVILEGES;"
mariadb -uwpu -padmin wordpress < localhost.sql
