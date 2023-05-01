FROM php:8.1-apache

# # syntax untuk mendownload mysqli dan menjalankannya
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt-get update && apt-get upgrade -y

# menggunakan index.php sebagai halaman utama dari web
# COPY ./php/src/index.php /var/www/html

# # memindahkan control list ke www-data dan menhilangkan permission 
# RUN chown -R www-data:www-data /var/www/html/ && chmod -R o-wx /var/www

# EXPOSE 80
# EXPOSE 7077

