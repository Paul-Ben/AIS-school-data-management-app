# Student Management Web application

## Author: Paul-Ben Ajene

## Description:
This is a school  management web application built using Laravel (laravel version 9).
 - Register student Module
 - Search Student 
 - View Class
 - Results processing 
 - view individual results
 - Fees setup 
 - Generate Receipt

## How to Use

- Clone the repository and navigate (cd) into the application directory using the command : `git clone https://github.dev/Paul-Ben/online-store-project-for-guas`

- copy contents of `.env.example` file to `.env` file.

- update the database details in the `.env` file as

    - `DB_DATABASE= your_Database_name`
    - `DB_USERNAME=your_username`
    - `DB_PASSWORD=your_password`

- run the commands: `composer update` and `composer install`

- Next run the command: `php artisan migrate` to run the database migrations

- Next run the command: `php artisan serve` to run the server to serve the project.

- browser url is http://127.0.0.1:8000 to check that the application is running fine.

- visit http://127.0.0.1:8000/register to register a new account

