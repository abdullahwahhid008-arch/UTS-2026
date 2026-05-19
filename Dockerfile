FROM php:8.2-apache

# Install ekstensi PDO MySQL untuk database
RUN docker-php-ext-install pdo pdo_mysql

# Aktifkan modul rewrite Apache
RUN a2enmod rewrite

# Ganti konfigurasi Apache agar mengizinkan akses ke semua folder
RUN sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

# Salin semua file proyek dari laptop ke dalam kontainer Docker
COPY . /var/www/html

# PAKSA pemberian hak akses penuh ke user Apache (www-data)
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

WORKDIR /var/www/html