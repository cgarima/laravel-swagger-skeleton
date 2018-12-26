requirements:

PHP >= 7.1.3
OpenSSL PHP Extension
PDO PHP Extension
Mbstring PHP Extension
Tokenizer PHP Extension
XML PHP Extension
Ctype PHP Extension
JSON PHP Extension
BCMath PHP Extension

laravel 5.7 & swagger UI 3.0



Steps to follow

1) run composer update

2) cp .env.example .env

3) php artisan key:generate

4) Make database entry in .env file

5) php artisan migrate

6) php artisan db:seed

7) provide permission sudo chmod -R 0777 storage/ public/ bootstrap/cache/

8) php artisan serve --port=8000

9) Open http://localhost:8000/api/documentation

10) Bingo!!! Swagger Documentation with Login [includes jwt] / logout API is there. You can take it further from here.


