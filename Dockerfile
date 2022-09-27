FROM bref/php-81:latest

COPY . /var/task

COPY --from=bref/php-81-console:latest /opt/bootstrap /opt/bootstrap-console
