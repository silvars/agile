##FreakTemplate
FreakTemplate is application template for web and mobile using Symfony 2.4.0

###SYSTEM REQUIREMENTS

FreakTemplate requires PHP 5.5.0 or later; We recommend using the latest PHP version whenever possible.

###LICENSE

The files in this archive are released under the MIT license. You can find a copy of this license in LICENSE.txt.

### INSTALLATION

For run FreakTemplate you need install PHP 5.5 or later, after, you need to follow steps:

1) Clone the git repository for your project directory:
$ cd /path/to/project/

You can clone with HTTPS:
$ git clone https://github.com/FreakRabbit/FreakTemplate.git

Or SSH:
<code>
$ git clone https://github.com/FreakRabbit/FreakTemplate.git
</code>
After cloning project, you need rum Composer for install and manage dependencies.
<code>
$ php composer.phar install
</code>
Done! Now you see into your root directory the basicly structure of project.

For advanced Apache configuration options, see the official Apache documentation. The minimum basics to get your application running under Apache2 are:

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
