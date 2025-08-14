FROM php:8.1-apache

# Enable Apache mod_rewrite (optional, for frameworks like Laravel)
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy your PHP files into the container
COPY . /var/www/html

# Set correct permissions so PHP can read/write/unlink files like cookie.txt
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 775 /var/www/html

# Expose port 80 for HTTP access
EXPOSE 80
