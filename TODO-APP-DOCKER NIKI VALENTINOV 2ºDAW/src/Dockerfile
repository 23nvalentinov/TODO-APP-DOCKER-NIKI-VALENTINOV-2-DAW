# Usa la imagen base oficial de PHP con Apache
FROM php:7.4-apache

# Copia el contenido de la carpeta src al directorio raíz del servidor web
COPY . /var/www/html/

# Instala extensiones de PHP necesarias
RUN docker-php-ext-install mysqli

# Exponer el puerto 80
EXPOSE 80
