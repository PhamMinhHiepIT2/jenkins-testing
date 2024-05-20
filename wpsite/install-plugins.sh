#!/bin/bash

# Path to wp-cli
WP_CLI=/usr/local/bin/wp

# Wait until the database is available
until mysqladmin ping -h "$WORDPRESS_DB_HOST" --silent; do
    echo "Waiting for database connection..."
    sleep 2
done

# Install WordPress if not already installed
if ! $WP_CLI core is-installed; then
    $WP_CLI core install --url="http://localhost" --title="Your Blog Title" --admin_user="admin" --admin_password="password" --admin_email="admin@example.com"
fi

# Activate plugins
for plugin in $(ls /var/www/html/wp-content/plugins); do
    $WP_CLI plugin activate $plugin
done
