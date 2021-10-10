FROM centos:latest

RUN yum install httpd -y
RUN yum install php -y
RUN yum install sudo -y
RUN yum install php-mysqli -y
ADD challenges /var/www/html
ADD start.sh /
RUN chmod +x /start.sh
EXPOSE 80
CMD ./start.sh && bash
