FROM debian:stretch-slim
MAINTAINER Dario Caruso (dottgonzo) <dev@dariocaruso.info>
RUN apt update
RUN apt install -y nginx curl postfix wget php-fpm php-mysql php-curl php-gd php-mbstring php-mcrypt php-xml php-xmlrpc nano mysql-client unzip
WORKDIR /var/www/html
COPY ./defaultsite /etc/nginx/sites-available/default
CMD service php7.0-fpm start && nginx -g "daemon off;"
EXPOSE 80
