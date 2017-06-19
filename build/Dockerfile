FROM debian:stretch-slim
MAINTAINER Dario Caruso <dev@dariocaruso.info>
WORKDIR /var/www/html
RUN apt update
RUN apt install nginx curl wget php-fpm php-curl php-gd php-mbstring php-mcrypt php-xml php-xmlrpc nano mysql-client unzip -y
CMD ["nginx", "-g", "daemon off;"]
EXPOSE 80
