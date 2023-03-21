FROM nginx:alpine

EXPOSE 80 443

WORKDIR /etc/nginx/

COPY ./conf/nginx.conf nginx.conf

RUN mv conf.d/default.conf default.conf.bak
COPY ./conf/default.conf conf.d/default.conf

# RUN while true; do sleep 1; done
