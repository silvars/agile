##FreakTemplate
FreakTemplate is application template for web and mobile using Symfony 2.4.0

###SYSTEM REQUIREMENTS

FreakTemplate requires PHP 5.5.0 or later; We recommend using the latest PHP version whenever possible.

###LICENSE

The files in this archive are released under the MIT license. You can find a copy of this license in LICENSE.txt.

### INSTALLATION

Clone the git repository for your project directory:

```shell
$ cd /path/to/project/
```

You can clone with HTTPS:


```shell
$ git clone https://github.com/FreakRabbit/FreakTemplate.git
```

Or SSH:


```shell
$ git clone https://github.com/FreakRabbit/FreakTemplate.git
```

After cloning project, you need rum [Composr](http://getcomposer.org/) for install and manage dependencies.


```shell
$ php composer.phar install
```

For advanced Apache configuration options, see the official [Apache documentation](http://httpd.apache.org/docs/current/mod/core.html#documentroot). The minimum basics to get your application running under Apache2 are:


```shell
#Virtual Host for FreakTemplate:
<VirtualHost *:80>
    ServerName freak.localhost
    DocumentRoot /path/to/project/web/

    <Directory /path/to/project/web/>
        AllowOverride All
        Order allow,deny
        Allow from All
    </Directory>

    ErrorLog /var/log/apache2/freak_error.log
    CustomLog /var/log/apache2/freak_access.log combined
</VirtualHost>
<code>
```
