#Download base image of a lamp stack
FROM linode/lamp:latest
ADD ./cms/ /var/www/html
RUN service start mysql