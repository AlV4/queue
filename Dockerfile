FROM ubuntu:18.04

ENV DEBIAN_FRONTEND=noninteractive

COPY . /app/

WORKDIR /app

RUN apt-get update \
&& apt-get install -y software-properties-common \
&& LC_ALL=C.UTF-8 add-apt-repository ppa:ondrej/php \
&& apt-get update

RUN apt-get install -y curl git nginx unzip php7.4-cli php7.4-fpm php7.4-intl php7.4-mysql php7.4-mbstring php7.4-zip php7.4-xml php7.4-amqp \
&& curl https://getcomposer.org/installer > composer-setup.php \
&& php composer-setup.php --install-dir=/usr/bin --filename=composer && rm -f composer-setup.php \
composer global require hirak/prestissimo \
&& composer install --prefer-dist

COPY ./docker/nginx /etc/nginx/sites-available

CMD service php7.4-fpm start && nginx -g "daemon off;"

EXPOSE 80