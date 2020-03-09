FROM iserter/php-fpm:7.4

#RUN apt-get install supervisor -y

COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf
#COPY run_supervisord.sh /opt/bin/run_supervisord.sh

# Changing Workdir
WORKDIR /app

CMD ["/usr/bin/supervisord"]
# ENTRYPOINT ["/usr/bin/supervisord"] does not work.
# --> "Error: positional arguments are not supported"
# http://stackoverflow.com/questions/22465003/error-positional-arguments-are-not-supported
#ENTRYPOINT ["/usr/bin/supervisord", "-n", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
#ENTRYPOINT ["bash", "/opt/bin/run_supervisord.sh"]
