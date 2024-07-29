# Sử dụng image chứa Apache và PHP mới nhất
FROM php:apache

# Cấu hình ServerName 
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf


# set up document root for apache
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf

# mod_rewrite for URL rewrite and mod_headers for .htaccess extra headers like Access-Control-Allow-Origin-
RUN a2enmod rewrite headers

# Cài đặt các extension PHP cần thiết và làm sạch cache
RUN apt-get update && apt-get install -y \
    libicu-dev \
    && docker-php-ext-install intl mysqli pdo pdo_mysql \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

RUN apt-get update &&\
    apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev &&\
    docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/ &&\
    docker-php-ext-install gd

# composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /composer
ENV PATH $PATH:/composer/vendor/bin

# Cấu hình Apache quyền truy cập vào các tệp
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

# Copy mã nguồn vào thư mục /var/www/html
COPY ./src/ /var/www/html/

# Expose cổng 80
EXPOSE 80

# Khởi động Apache khi container bắt đầu
CMD ["apache2-foreground"]
