# Use the official PHP Apache image
FROM php:apache

# Install MySQLi extension
RUN docker-php-ext-install mysqli

# Set the working directory
WORKDIR /var/www/html

# Copy the PHP files into the container
COPY . /var/www/html

# Expose port 80
EXPOSE 80

# Configure Apache
RUN a2enmod rewrite

# Update the PHP.ini settings
RUN { \
        echo 'session.save_path = "/tmp"'; \
        echo 'date.timezone = "Asia/Bangkok"'; \
    } > /usr/local/etc/php/conf.d/php.ini

# Start Apache
CMD ["apache2ctl", "-D", "FOREGROUND"]