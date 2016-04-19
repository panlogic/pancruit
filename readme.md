# Pancruit

#Root SQL folder
Use for storing SQL backups for transfer between installs if required


##Root Documents folder
Use for storing site related developer documents including specs, testing, notes etc

##Sample Apache setup file
```
<VirtualHost *:80>
	ServerName pancruit.local
	DocumentRoot /var/www/panlogic/repos/pancruit/webroot/public
	<Directory />
		Options +FollowSymLinks
		AllowOverride All
	</Directory>
	<Directory /var/www/panlogic/repos/pancruit/webroot/public/>
		Options +Indexes +FollowSymLinks +MultiViews
		AllowOverride All
		Order allow,deny
		allow from all
	</Directory>

	DirectoryIndex index.php

	LogLevel warn
	ErrorLog /var/www/panlogic/repos/pancruit/logs/error.log
	CustomLog /var/www/panlogic/repos/pancruit/logs/access.log combined
</VirtualHost>
```