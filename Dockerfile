FROM mysql:latest

COPY /mysql/dump.sql /docker-entrypoint-initdb.d/

EXPOSE 3306