# Dockerfile para una imagen PHP con Apache
FROM php:apache

# Información del mantenedor
LABEL maintainer="Dameris <dmermar2302@g.educaand.es>"

# Establecer el directorio de trabajo
WORKDIR /var/www/html

# Exponer el puerto 80
EXPOSE 80

# Definir un volumen
VOLUME /var/www/html

# Establecer el comando por defecto
CMD ["apache2-foreground"]