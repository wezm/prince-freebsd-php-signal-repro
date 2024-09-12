Prince PHP FreeBSD Reproduction
==============================

These are files used to run Prince through the PHP wrapper on FreeBSD with Apache and FastCGI.

- `etc` is `/usr/local/etc/apache24`
- `www` is `/usr/local/www/apache24`

Relevant files:

- `etc/modules.d/080_mod_fcgi.conf` — enable the FastCGI module
- `etc/extra/httpd-vhosts.conf` — virtual host configuration. Notably configures `.php` files to be handled by `php.fcgi`
- `www/cgi-bin/php.fcgi` — PHP handler script
- `www/data/prince.php` — PHP file that invokes prince and generates a PDF.

## Environment

- FreeBSD 14.1-RELEASE
- PHP Version 8.1.29
- Apache/2.4.62 (FreeBSD) mod\_fcgid/2.3.9
