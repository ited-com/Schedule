1. Clone GitHub repo for this project locally
  	$ git clone https://github.com/ited-com/Schedule.git
2. cd into your project
  	$ cd Schedule
3. Install Composer Dependencies
	$ composer install
4. Create a copy of your .env file
	$ cp .env.example .env
5. Generate an app encryption key
	$ php artisan key:generate
6. Create an empty database for our application
	create database name : Schedule
7. In the .env file, add database information to allow Laravel to connect to the database
	We will want to allow Laravel to connect to the database that you just created in the previous step. To do this, we must add the 		connection credentials in the .env file and Laravel will handle the connection from there.

	In the .env file fill in the DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD options to match the credentials of the 		database you just created. This will allow us to run migrations and seed the database in the next step.
 9. Migrate the database
    $ php artisan migrate
 10 . run project
 	$ php artisan serve
	then go to broswer search (localhost:8000)
