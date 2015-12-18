FROM ubuntu:trusty
# Ubuntu 14.04, Trusty Tahr(可靠的塔尔羊)发行版

# 道客船长荣誉出品
MAINTAINER Captain Dao (support@daocloud.io)

# APT自动安装PHP相关的依赖包,如需其他依赖包在此添加.
RUN apt-get update && \
	DEBIAN_FRONTEND=noninteractive apt-get -yq install \
		curl \
	    apache2 \
	    libapache2-mod-php5 \
	    php5-mysql \
	    php5-sqlite \
	    php5-gd \
	    php5-curl \
	    php-pear \
	    php-apc && \

	# 用完包管理器后安排打扫卫生可以显著的减少镜像大小.
	apt-get clean && \
	apt-get autoclean && \
	rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* && \

	# 安装Composer,此物是PHP用来管理依赖关系的工具,laravel symfony等时髦的框架会依赖它.
	curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Apache2配置文件:/etc/apache2/apache2.conf
# 给Apache2设置一个默认服务名,避免启动时给个提示让人紧张.
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf && \

	# PHP配置文件:etc/php5/apache2/php.ini
	# 调整PHP处理Request里变量提交值的顺序,解析顺序从左到右,后解析新值覆盖旧值.
	# 默认设定为EGPCS(ENV/GET/POST/COOKIE/SERVER)
	sed -i "s/variables_order.*/variables_order = \"EGPCS\"/g" /etc/php5/apache2/php.ini

# 配置默认放置App的目录
RUN mkdir -p /app && rm -fr /var/www/html && ln -s /app /var/www/html
ADD . /app
WORKDIR /app
RUN chmod 755 ./start.sh

RUN chmod -R 777 /app/src/public/plug/uedit/php
RUN chmod -R 777 /app/src/public/upload

EXPOSE 80
CMD ["./start.sh"]

#COPY src/ /var/www/html
#WORKDIR /var/www/html

ADD httpd.conf /etc/apache2/sites-enabled/000-default.conf
#ADD php.ini /etc/php5/apache2/php.ini

#RUN chmod -R 777 /var/www/html/app/cache
#RUN chmod -R 777 /var/www/html/app/logs
#RUN cd /var/www/html
#RUN php app/console cache:clear
