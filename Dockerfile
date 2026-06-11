FROM php:8.2.31-apache

#http://localhost:8080/
COPY src/ /var/www/html/
#http://localhost:8080/practice.php
COPY src/practice.php /var/www/html/
#http://localhost:8080/form_book.php
COPY src/form_book.php /var/www/html/
#http://localhost:8080/confirm_book.php
COPY src/confirm_book.php /var/www/html/

#http://localhost:8080/STEP4_test/form.php
COPY src/STEP4_test/form.php /var/www/html/
#http://localhost:8080/STEP4_test/confirm.php
COPY src/STEP4_test/confirm.php /var/www/html/

#docker start php-containerを行うこと