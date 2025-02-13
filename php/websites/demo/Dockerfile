# Use the official PHP image with Apache
FROM php:8.2-apache

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy the application files into the container
COPY . .

# Install PHP extensions (e.g., for MySQL)
RUN docker-php-ext-install pdo_mysql

# Expose port 80 for Apache
EXPOSE 80