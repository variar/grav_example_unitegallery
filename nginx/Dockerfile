FROM nginx:latest

MAINTAINER variar

ADD conf/nginx.conf /etc/nginx/
ADD conf/default.conf /etc/nginx/sites-available/

RUN usermod -u 1000 www-data

CMD ["nginx"]

EXPOSE 80 443
