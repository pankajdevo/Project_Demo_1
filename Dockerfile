# Use the official PHP image as base image
FROM php:7.4-cli

# Set the working directory inside the container
WORKDIR /app

# Copy the current directory contents into the container at /app
COPY . /app

# Command to run the PHP script
CMD ["php", "-S", "0.0.0.0:4000"]
