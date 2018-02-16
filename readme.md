Blog url: http://tarikuli.blogspot.com/2018/02/online-survey-app-using-laravel.html
Online Survey app using Laravel


I developed a simple online Survey Application using
- PHP Laravel 5.2 Framework
- CSS Bootstrap 3
- jQuery


Step 1: Download Full Source code from my Github repository.

$ git clone https://github.com/tarikuli/survey-application.git
$ git pull origin master 


Step 2: Create Database


Step 3: Change ".env" file database credential.  
vi .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=reportsdb
DB_USERNAME={your DB User Name}
DB_PASSWORD={Your DB Pass}

Step 4: Migrate Tables and rows ( initial demo questions) to DB
$ php artisan migrate
$ php artisan db:seed
Step 5: Use app by registering your ID & Password
http://54.190.32.174
