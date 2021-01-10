FROM wyveo/nginx-php-fpm:latest

WORKDIR /usr/share/nginx

COPY . .

RUN composer install

RUN rm -rf /usr/share/nginx/html

RUN ln -s public html

EXPOSE 8080

CMD php artisan migrate && php artisan serve --host=0.0.0.0 --port=8080
