# Use the official PHP image
FROM php:latest

# Install MySQLi extension
RUN docker-php-ext-install mysqli

# Set the working directory
WORKDIR /var/www/html

# Copy the PHP files into the container
COPY . /var/www/html

# Expose port 8080
EXPOSE 8080

# Command to run the PHP application
CMD ["php", "-S", "0.0.0.0:8080"]