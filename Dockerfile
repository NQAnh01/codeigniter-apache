# Sử dụng image chứa Apache và PHP mới nhất
FROM php:apache

# Cấu hình ServerName 
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf


# 2. set up document root for apache
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf

# 3. mod_rewrite for URL rewrite and mod_headers for .htaccess extra headers like Access-Control-Allow-Origin-
RUN a2enmod rewrite headers

# Cài đặt các extension PHP cần thiết và làm sạch cache
RUN apt-get update && apt-get install -y \
    libicu-dev \
    && docker-php-ext-install intl \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Cấu hình Apache quyền truy cập vào các tệp
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

# Copy mã nguồn vào thư mục /var/www/html
COPY ./src/ /var/www/html/

# Expose cổng 80
EXPOSE 80

# Khởi động Apache khi container bắt đầu
CMD ["apache2-foreground"]
