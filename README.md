# PHP-Learn

[Watch tutorial in Hoang teacher's youtube channel for more detail](https://www.youtube.com/watch?v=r1qie9pDweE)

# Install Laravel

```bash
sudo apt update
sudo apt install apache2
sudo systemctl start apache2
sudo systemctl enable apache2
sudo systemctl status apache2
```

```bash
sudo apt-get install -y php7.4-cli php7.4-json php7.4-common php7.4-mysql php7.4-zip php7.4-gd php7.4-mbstring php7.4-curl php7.4-xml php7.4-bcmath
php -v
```

```bash
sudo apt install --assume-yes mariadb-server mariadb-client -y
sudo mysql -u root -p

CREATE USER '<username>'@'localhost' IDENTIFIED BY '<password>';
GRANT ALL ON <table_name>.* TO '<username>'@'localhost';
FLUSH PRIVILEGES;
QUIT;
```

```SQL
sudo mysql -u <username> -p

CREATE DATABASE <table_name>;
```

```bash
sudo apt-get remove composer
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
HASH="$(wget -q -O - https://composer.github.io/installer.sig)"
php -r "if (hash_file('SHA384', 'composer-setup.php') === '$HASH') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
sudo mv composer.phar /usr/local/bin/composer
cd /usr/bin && sudo ln -sf /usr/local/bin/composer && cd -
sudo chmod +x /usr/local/bin/composer
composer --version
```

```bash
cd /var/www/html
sudo composer create-project laravel/laravel laravelapp "8.*"
sudo chown -R www-data:www-data /var/www/html/laravelapp
sudo chmod -R 775 /var/www/html/laravelapp/storage
cd laravelapp
php artisan
```

```bash
sudo vim /etc/apache2/sites-available/laravel.conf
```

```bash
<VirtualHost *:80>
ServerName 127.0.0.1
ServerAdmin luongtandat.m0145@gmail.com
DocumentRoot /var/www/html/laravelapp/public
<Directory /var/www/html/laravelapp>
AllowOverride All
</Directory>
ErrorLog ${APACHE_LOG_DIR}/error.log
CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
```

```bash
sudo a2ensite laravel.conf
sudo a2enmod rewrite
sudo systemctl restart apache2
```


