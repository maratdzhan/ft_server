#!/bin/bash

service mysql start
service php7.3-fpm start

# Disabling autoindex if requested
if [ "$INDEX" -eq "0" ]
then
	cp no_index /etc/nginx/sites-available/default
else
	cp site_config /etc/nginx/sites-available/default
fi

# Starting nginx in foreground
nginx -g 'daemon off;'
