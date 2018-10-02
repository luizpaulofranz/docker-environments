FROM php:7.2-apache
RUN docker-php-ext-install mysqli
RUN a2enmod rewrite

RUN apt-get update \
	&& DEBIAN_FRONTEND=noninteractive apt-get install -y --no-install-recommends \
	software-properties-common \
	&& apt-get update \
	&& DEBIAN_FRONTEND=noninteractive apt-get install -y \
	libfreetype6-dev \
	libicu-dev \
  	libssl-dev \
	libjpeg62-turbo-dev \
	libmcrypt-dev \
	libpng-dev \
	libedit-dev \
	libedit2 \
	libxslt1-dev \
	apt-utils \
	redis-tools \
	mysql-client \
	git \
	vim \
	wget \
	curl \
	lynx \
	psmisc \
	unzip \
	tar \
	cron \
	bash-completion \
	&& apt-get clean

# Install PHP packages
# https://docs.docker.com/samples/library/php/#how-to-install-more-php-extensions
RUN docker-php-ext-configure \
  	gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/; \
  	docker-php-ext-install \
  	opcache \
  	gd \
  	bcmath \
  	intl \
  	mbstring \
  	pdo_mysql \
  	soap \
  	xsl \
  	zip

# Install XDebug
RUN yes | pecl install xdebug && \
	 echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.iniOLD

# Copy shell scripts
ADD env/etc/custom-xdebug.ini /usr/local/etc/php/conf.d/custom-xdebug.ini
COPY env/bin/* /usr/local/bin/

WORKDIR /var/www/html
