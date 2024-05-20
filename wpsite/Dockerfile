# Use the official WordPress image from the Docker Hub
FROM wordpress:latest

# Set the environment variables
ENV WORDPRESS_DB_HOST=db:3306
ENV WORDPRESS_DB_USER=your_db_user
ENV WORDPRESS_DB_PASSWORD=your_db_password
ENV WORDPRESS_DB_NAME=your_db_name

# Copy the plugins directory into the WordPress container
COPY wp-content/plugins /var/www/html/wp-content/plugins/

# Run a custom script to install and activate plugins (optional)
COPY install-plugins.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/install-plugins.sh
RUN /usr/local/bin/install-plugins.sh

# Expose the port WordPress runs on
EXPOSE 80

# Start the Apache server
CMD ["apache2-foreground"]
