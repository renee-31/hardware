# Use the official PHP image with Apache
FROM php:8.2-apache

# Copy all project files into the container
COPY . /var/www/html/

# Expose port 80
EXPOSE 80

# Start Apache when the container runs
CMD ["apache2-foreground"]