FROM centos:7
MAINTAINER Carlos Sura <carlos@sendsms.com>
LABEL Description="LAMP PHP 7.2. CentOS 7 - sendsms website production" \
	Usage="Kubernetes only" \
	Version="1.0"


# Install epel
RUN yum -y install epel-release

# Install RPMs
RUN rpm -Uvh http://rpms.remirepo.net/enterprise/remi-release-7.rpm


# Install Web Server
RUN yum -y update && yum clean all
RUN yum -y install httpd httpd-devel mod_ssl && yum clean all

# Install development tools and needed tools
RUN yum -y install \
gcc \
make \
openssl-devel \
python34 \
python34-devel \
python34-setuptools \
python-pip \
python-setuptools \
nano \
wget \
vim\
vim-enhanced \
bash-completion \
yum-utils \
git

RUN yum groupinstall -y base && yum groupinstall -y 'Development Tools'
RUN yum clean all

# Networking
RUN echo "NETWORKING=yes" > /etc/sysconfig/network

# Using php7.2
RUN yum-config-manager --enable remi-php72

# Install php
RUN yum install -y \
	php \
	php-devel \
	php-pear \
	php-common \
	php-dba \
	php-gd \
	php-intl \
	php-ldap \
	php-mbstring \
	php-mysqlnd \
	php-odbc \
	php-pdo \
	php-pecl-memcache \
	php-pgsql \
	php-pspell \
	php-recode \
	php-snmp \
	php-soap \
	php-xml \
	php-xmlrpc


# Custom environment variables defined here
ENV ALLOW_OVERRIDE All
ENV DATE_TIMEZONE America/New_York


# Install pip & supervisord
RUN easy_install pip
RUN pip install --upgrade pip
RUN pip install supervisor

# Adding index.php file which contains phpinfo only.
COPY /files/ /var/www/html/

# Install sshd
RUN yum install -y openssh-server openssh-clients passwd
RUN ssh-keygen -q -N "" -t dsa -f /etc/ssh/ssh_host_dsa_key && ssh-keygen -q -N "" -t rsa -f /etc/ssh/ssh_host_rsa_key
RUN sed -ri 's/UsePAM yes/UsePAM no/g' /etc/ssh/sshd_config && echo 'root:L@ck3d123' | chpasswd

# Adding custom supervisord configuration.
ADD supervisord.conf /etc/

# Creating directory for the certs
RUN mkdir -p /etc/httpd/ssl/

# Adding certificates
ADD /certs/ /etc/httpd/ssl/

# Adding custom configuration for the vhost.
ADD /vhosts/sendsms.conf /etc/httpd/conf.d/

# Exposed ports
EXPOSE 22 80 443

# Running supervisord
CMD ["supervisord", "-n"]