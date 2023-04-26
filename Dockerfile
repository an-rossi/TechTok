FROM mysql:latest

ENV MYSQL_ROOT_PASSWORD: root
ENV MYSQL_DATABASE: techtok
ENV MYSQL_USER: root
ENV MYSQL_PASSWORD: root

COPY /mysql/dump.sql /docker-entrypoint-initdb.d/

EXPOSE 3306