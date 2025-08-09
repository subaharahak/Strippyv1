FROM php:8.1-apache

# Copy app files into the container
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html/

# Fix permissions: Allow Apache (www-data) to read/write/delete files
RUN chown -R www-data:www-data /var/www/html/ \
    && chmod -R 775 /var/www/html/

# Optional: install PHP extensions if needed (e.g. curl, mbstring)
# RUN docker-php-ext-install curl mbstring

# Expose port 80 for HTTP
EXPOSE 80
