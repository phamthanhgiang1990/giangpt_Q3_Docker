FROM nginx

RUN apt-get update && \
    DEBIAN_FRONTEND=noninteractive apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libmcrypt-dev \
    libbz2-dev \
    libxslt-dev \
    libldap2-dev \
    php-pear \
    curl \
    git \
    subversion \
    unzip \
    wget \
  && rm -r /var/lib/apt/lists/*

#RUN mkdir /var/www
#RUN mkdir /var/www/html
#RUN cd /var/www/html
#RUN git clone https://github.com/lando110390/yii2_basic.git