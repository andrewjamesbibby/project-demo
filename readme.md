## Project Demo

This is a dmeo of a basic CRM in Laravel. It is themed with Core UI.

### Installation

1. Start by cloning this project.
````
https://github.com/andrewjamesbibby/project-demo.git
````

2. Install all required libraries
```
composer install
```

3. Create an sqlite database file
````
touch database/database.sqlite
````

4. Create a test database (only if testing)
```
touch database/testdb.sqlite
```

5. Migrate and seed
```
php artisan migrate --seed
```

6. Copy .env.example to .env. Ensure the mail driver is set to log and the DB_DATABASE is the relative path to the database/sqlite file.

7. Spin up local webserver from project root 
```
php artisan serve
```

8. Navigate to http://127.0.0.1:8000 and login with admin@domain.com | password

 ### Testing
To run unit test - ensure the test database exists (see above) and run:
````
phpunit
````
 
 ### Development
 
 The javascript and css files have been pre compiled to production assets. To work on them first install all npm libraries.
 
````
npm install
````

Then after making any changes run:

````
npm run dev
````
 
Or a watcher can be run with:
 
 ````
 npm run watch
 ````
 
