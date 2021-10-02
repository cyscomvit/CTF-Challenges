FROM centos:latest

RUN yum install httpd -y
RUN yum install php -y
RUN yum install sudo -y
ADD CTF-Challenges /var/www/html
ADD start.sh /
RUN chmod +x /start.sh
EXPOSE 80
CMD ./start.sh && bash
