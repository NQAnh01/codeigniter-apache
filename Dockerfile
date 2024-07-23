# Sử dụng image chứa Apache và PHP mới nhất
FROM php:apache

# Cài đặt các extension PHP cần thiết và làm sạch cache
RUN apt-get update && apt-get install -y \
    libicu-dev \
    && docker-php-ext-install intl \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Copy mã nguồn vào thư mục /var/www/html
COPY ./src/ /var/www/html/

# Chuyển đổi thư mục gốc của Apache sang thư mục public của CodeIgniter
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf \
    && sed -i 's|/var/www|/var/www/html/public|g' /etc/apache2/apache2.conf

# Cấu hình ServerName 
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Expose cổng 80
EXPOSE 80

# Khởi động Apache khi container bắt đầu
CMD ["apache2-foreground"]
