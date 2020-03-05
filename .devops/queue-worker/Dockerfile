FROM iserter/php-fpm:7.4

#RUN apt-get install supervisor -y

COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf
#COPY run_supervisord.sh /opt/bin/run_supervisord.sh

# Changing Workdir
WORKDIR /app

CMD []
ENTRYPOINT ["/usr/bin/supervisord", "-n", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
#ENTRYPOINT ["bash", "/opt/bin/run_supervisord.sh"]
