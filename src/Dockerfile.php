# PART 1

# Dockerfile for a PHP image with Apache
FROM php:apache

# Maintainer information
LABEL maintainer="Dameris <dmermar2302@g.educaand.es>"

# Set the working directory
WORKDIR /var/www/html

# Expose port 80
EXPOSE 80

# Define a volume
VOLUME /var/www/html

# Set the default command
CMD ["apache2-foreground"]