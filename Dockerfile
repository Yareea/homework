# Use the official Nginx image
FROM nginx:latest

# Install PHP and MySQLi extension
RUN apt-get update && apt-get install -y \
    php-fpm \
    php-mysqli

# Copy the Nginx configuration file
COPY nginx.conf /etc/nginx/nginx.conf

# Set the working directory
WORKDIR /var/www/html

# Copy the PHP files into the container
COPY . /var/www/html

# Expose port 80
EXPOSE 80
