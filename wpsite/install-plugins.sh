#!/bin/bash

set -x

# Path to wp-cli
WP_CLI=/usr/local/bin/wp

# Wait until the database is available
# until mysqladmin ping -h "$WORDPRESS_DB_HOST" --silent; do
#     echo "Waiting for database connection..."
#     sleep 2
# done

# Install WordPress if not already installed
if ! $WP_CLI core is-installed --allow-root ; then
    $WP_CLI core download --allow-root 
    $WP_CLI core install --allow-root --url="http://localhost" --title=Example --admin_user=supervisor --admin_email=info@example.com --admin_password=password
fi

# Activate plugins
for plugin in $(ls /var/www/html/wp-content/plugins); do
    
    $WP_CLI plugin activate $plugin --allow-root
done
