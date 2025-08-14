FROM php:8.1-apache

# Enable required Apache modules
RUN a2enmod rewrite

# Install required PHP extensions
RUN apt-get update && apt-get install -y \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    unzip \
    curl \
    && docker-php-ext-install pdo_mysql zip mbstring gd

# Optional: Enable display errors (for development only — disable in production)
RUN echo "display_errors=On\nerror_reporting=E_ALL" > /usr/local/etc/php/conf.d/errors.ini

# Set working directory
WORKDIR /var/www/html

# Copy all project files to container
COPY . /var/www/html

# Set proper file/folder permissions
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 775 /var/www/html

# Make sure cookie.txt can be deleted/unlinked by PHP
RUN touch /var/www/html/cookie.txt && \
    chmod 666 /var/www/html/cookie.txt

# Set Apache to serve from public folder (optional)
# ENV APACHE_DOCUMENT_ROOT /var/www/html/public

# Expose port 80 to the world
EXPOSE 80
