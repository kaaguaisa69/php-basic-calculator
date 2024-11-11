# Usamos una imagen base oficial de PHP con Apache
FROM php:7.4-apache

# Copiamos los archivos de nuestra aplicación al contenedor
COPY . /var/www/html/

# Exponemos el puerto 80 para que podamos acceder a la aplicación
EXPOSE 80
