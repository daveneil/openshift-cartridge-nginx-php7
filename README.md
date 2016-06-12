# OPENSHIFT Nginx PHP 7 Cartridge
<img src="https://raw.githubusercontent.com/budisteikul/openshift-cartridge-nginx-php7/master/usr/openshift-redhat.jpg"><br />Welcome to the world of [PHP-FPM](http://php.net/manual/en/book.fpm.php) within [OPENSHIFT](https://www.openshift.com/) by [REDHAT](https://www.redhat.com/en).

## What's inside

* Nginx: 1.11.1
* PHP: 7.0.7
* Latest Composer

## Installation
### Web Console
Click [here](https://openshift.redhat.com/app/console/application_type/custom?unlock=true&application_type%5Bcartridges%5D=http%3A%2F%2Fcartreflect-claytondev.rhcloud.com%2Fgithub%2Fbudisteikul%2Fopenshift-cartridge-nginx-php7) for installation via web console. <br />
Alternatively, you can use this [cartridge definition](http://cartreflect-claytondev.rhcloud.com/github/budisteikul/openshift-cartridge-nginx-php7) on application creation page.

### Command Line
```
rhc app create appname http://cartreflect-claytondev.rhcloud.com/github/budisteikul/openshift-cartridge-nginx-php7
```
## Updates
You can update the binaries from the cartridge without reinstalling. To check for updates, SSH to your app and run this command:

```
update
```
Make sure to have your backup just in case some things went wrong.

## Configuration

### Nginx
Nginx will automatically include `.openshift/nginx.conf.erb` file.

### PHP-FPM
PHP-FPM will automatically load `.openshift/php-fpm.ini.erb` and `.openshift/php-fpm.conf.erb` files.

## Website
The web root directory is `public/`. Make changes to your website there, then commit and push.

## Scripts
This cartridge comes with different scripts for easy management of your app inside SSH.

* `version` - Get the version of the cartridge binaries.
* `service` - A psuedo `/usr/bin/service` to start and stop services. Example:
    * `service php-fpm start`
	* `service php-fpm stop`
	* `service nginx start`
    * `service nginx stop`
* `update` - Allows automatic update of the cartridge binaries.
    * `update check` - Check for updates
    * `update install` - Install updates
