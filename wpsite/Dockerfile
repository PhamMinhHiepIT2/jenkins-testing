# Use the official WordPress image from the Docker Hub
FROM wordpress:latest

# Set the environment variables
ENV WORDPRESS_DB_HOST=db:3306
ENV WORDPRESS_DB_USER=wordpress
ENV WORDPRESS_DB_PASSWORD=not-so-secure
ENV WORDPRESS_DB_NAME=wordpress

# Install WP-CLI
RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && \
    chmod +x wp-cli.phar && \
    mv wp-cli.phar /usr/local/bin/wp

# Copy the plugins directory into the WordPress container
COPY wp-content/plugins /var/www/html/wp-content/plugins/
# COPY wp-config.php /var/www/html/wp-config.php

# Run a custom script to install and activate plugins (optional)
# COPY install-plugins.sh /usr/local/bin/
# COPY install-plugins.sh /usr/local/bin/install-plugins.sh


# # Make the scripts executable
# RUN chmod +x /usr/local/bin/install-plugins.sh

# RUN /usr/local/bin/install-plugins.sh


# Expose the port WordPress runs on
EXPOSE 80

# Start the Apache server
CMD [ "apache2-foreground" ]
