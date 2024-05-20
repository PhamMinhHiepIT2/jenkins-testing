ARG TAG=6.5.3
FROM docker.io/bitpoke/wordpress-runtime:${TAG}
# to add files to the webroot, place them in the `webroot` folder and uncomment
# the following line
# COPY config/ /app/config/
# COPY --chown=www-data:www-data wp-content/ /app/web/
# ENV PORT=8080
RUN wp core download --path=/app/web/wp
EXPOSE 8080
