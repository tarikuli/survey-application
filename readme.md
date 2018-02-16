Blog url: http://tarikuli.blogspot.com/2018/02/online-survey-app-using-laravel.html
Online Survey app using Laravel


I developed a simple online Survey Application using
- PHP Laravel 5.2 Framework
- CSS Bootstrap 3
- jQuery


Step 1: Download Full Source code from my Github repository.

- $ git clone https://github.com/tarikuli/survey-application.git
- $ git pull origin master 


Step 2: Create Database
<a href="https://3.bp.blogspot.com/-YhzGGMLpKts/WoYvjRdWIWI/AAAAAAAAVFk/Esa3PvGFRZkncPhG7vhJZuwv4k4AE_9mQCLcBGAs/s1600/cerete%2BDB.png" imageanchor="1" style="margin-left: 1em; margin-right: 1em;"><img border="0" data-original-height="60" data-original-width="515" height="37" src="https://3.bp.blogspot.com/-YhzGGMLpKts/WoYvjRdWIWI/AAAAAAAAVFk/Esa3PvGFRZkncPhG7vhJZuwv4k4AE_9mQCLcBGAs/s320/cerete%2BDB.png" width="320"></a>
<br>

Step 3: Change ".env" file database credential.  
- vi .env
- DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
- DB_PORT=3306
- DB_DATABASE=reportsdb
- DB_USERNAME={your DB User Name}
- DB_PASSWORD={Your DB Pass}


Step 4: Migrate Tables and rows ( initial demo questions) to DB
- $ php artisan migrate
- $ php artisan db:seed

Step 5: Use app by registering your ID & Password
- http://54.190.32.174
<br>
<a href="https://3.bp.blogspot.com/-22Wf79Bw8Vk/WoY16HxEmBI/AAAAAAAAVF0/jlJ-TxrGclkGLqgaJ9HOdd5la1sFwYY9wCLcBGAs/s1600/Screenshot%2Bfrom%2B2018-02-15%2B20-37-31.png" imageanchor="1" style="margin-left: 1em; margin-right: 1em;"><img border="0" data-original-height="498" data-original-width="852" height="187" src="https://3.bp.blogspot.com/-22Wf79Bw8Vk/WoY16HxEmBI/AAAAAAAAVF0/jlJ-TxrGclkGLqgaJ9HOdd5la1sFwYY9wCLcBGAs/s320/Screenshot%2Bfrom%2B2018-02-15%2B20-37-31.png" width="320"></a>
