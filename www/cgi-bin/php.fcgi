#!/bin/sh

PHPRC="/usr/local/etc/php.ini"
PHP_FCGI_CHILDREN=4
PHP_FCGI_MAX_REQUESTS=1000
export PHPRC
export PHP_FCGI_CHILDREN
export PHP_FCGI_MAX_REQUESTS
exec /usr/local/bin/php-cgi
