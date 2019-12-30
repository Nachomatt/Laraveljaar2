"# MDM" 
"# MDMproject" 

## Get Files
Click on PhpStorm. If a project opens, click close project. Then press check out from version control. Press git and enter this in your  Terminal
```bash
git init https://github.com/ZadkineICT/mvc-project-2019-mdm
```

## Installation and setup
Once it's installed you will have to enter these commands in your terminal

Step one: install Composer
```bash
composer install
```

Step two: install npm
```bash
npm install
```

Step three: copy .env
```bash
cp .env.example .env
```

Step four: key generate
```bash
php artisan key:generate
```
Step five: turn on Xampp (Apache & MySQL)
 
Step six: migrate and seed the project (dont't forget to change the database credentials)
```bash
php artisan migrate:fresh --seed
```

Step seven: Add the following files to Composer by entering these commands in your Terminal:
```
Composer require spatie/laravel-permission
``` 

Now enter the next command 
```bash
php artisan serve
```
You can now log in with the E-mail admin@admin.com with password secret.
