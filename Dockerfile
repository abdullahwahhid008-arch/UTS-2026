FROM php:8.3-apache

# Install ekstensi PDO MySQL untuk database
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Aktifkan modul rewrite Apache
RUN a2enmod rewrite

# Ubah root Apache ke folder public jika menggunakan Laravel style
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/default-ssl.conf

# Salin file proyek ke dalam kontainer
COPY . /var/www/html

# Set hak akses
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

WORKDIR /var/www/html
