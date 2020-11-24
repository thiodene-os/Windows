# Installing PHP 7 and Composer on Windows 10, Natively

## Why PHP?
PHP remains the most widespread and popular server-side programming language on the web. 
It is installed by most web hosts, has a simple learning curve, close ties with the MySQL database, and an excellent collection of libraries to cut your development time. 
PHP may not be perfect, but it should certainly be considered for your next web application. Both Yahoo and Facebook use it with great success.

## Download PHP version 7.4 for Windows
https://windows.php.net/download/
https://windows.php.net/download#php-7.4

## Extract the files preferably into 
C:\Users\AyissiSe\PHP
- Best location is:
C:\PHP

## Configure PHP.ini
- Copy php.ini-development to php.ini

- Edit the php.ini file
Uncomment and define the extension directory:
extension_dir = "C:\Users\AyissiSe\PHP"

Uncomment the following parameters:
extension=curl
extension=gd2
extension=mbstring
extension=mysql
extension=pdo_mysql
extension=xmlrpc

Extend the memory limit from 128M to 1G
memory_limit=1G

- Add PHP Path to the Windows Environment Varibales
C:\Users\AyissiSe\PHP

- Test a PHP file
Create a file named index.php and add this code:
<?php phpinfo(); ?>
If all goes well, a “PHP version” page should appear showing all the configuration settings.

- Test PHP on the command line alternatively
php -v

