# Use official PHP image with Apache
FROM php:8.1-apache

# Enable mod_rewrite (used for clean URLs)
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy all files into the web root
COPY . /var/www/html/

# Set permissions (optional but often needed)
RUN chown -R www-data:www-data /var/www/html

# Expose port 80 (Apache default)
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
