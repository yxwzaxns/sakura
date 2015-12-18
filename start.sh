#!/bin/bash
source /etc/apache2/envvars
a2enmod rewrite
tail -F /var/log/apache2/* &
tail -F /var/www/html/app/logs/* &
exec apache2 -D FOREGROUND
