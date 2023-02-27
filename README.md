# adminPanel

1- Admin panel to manage companies and their employees.
2- Basic Laravel Auth, ability to log in as administrator with email admin@admin.com and password "password" but remove ability to register (code hashed).
3- Ability to add, edit, delete, show companies with attributes (name, email, webiste, logo) and employees with attributes (firstname, lastname, company_id, email, phone).
4- Companies logos in storage/app/public folder.
5- Use Laravel's validation and pagination for showing Companies/Employees list, 10 entries per page.

## How to install:
1- Add .env file with your credentials database data.
2- Make migration using php artisan migrate and make command: php artisan db:seed to insert the default admin user form UserSeeder.
