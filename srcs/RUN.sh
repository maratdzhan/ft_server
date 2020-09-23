#!/bin/bash

service mysql start
mysql < make_db.sql
service php7.3-fpm start
nginx -g 'daemon off;'
