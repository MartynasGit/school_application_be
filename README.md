# School aplication manager

This is Backend part of the project.
To see frontend part of the project - https://github.com/MartynasGit/school_application_fe
Project will run if both frontend and back end parts are started.

### About project

* Used techonologies:
    - frontend: React library.
    - backend: Laravel framework
    - database: MYSQL

* Project:
    - Is secured with authentication and users have roles
    - Can show all schools form database
    - User add and delete applications to school.
    - Have admin page.
    - Admin can add, delete, edit schools and applications from app.

### Launching Back_End part

Clone backend part repository.
git clone https://github.com/MartynasGit/school_application_be.git

For project to run we need PHP interpreter(XAMPP), MySQL Workbench.
- Run Xaamp MYSQL module.
- In MYSQL workbench create schema named laravel.
- Change .env.example name to .env
- inside cloned folder run: composer install
- Now run migrations and seeders by typing in terminal:
- php artisan migrate  // php artisan db:seed
- php artisan serve
- if both frontend and backend parts are on project is live at
- http://localhost:3000


## Author

Project is created by Martynas Gumuliauskas.

Github - MartynasGit.

Linkedin - https://www.linkedin.com/in/martynasgum/

