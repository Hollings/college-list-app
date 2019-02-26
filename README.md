# College Listing App
## Installing the Project
Clone the project
```
git clone https://github.com/Hollings/college-list-app <install directory>
```
Install Composer dependencies
```
composer install
```

Create the link for Laravel's public storage directory
```
php artisan storage:link
```

Configure Laravel to connect to your MySQL database in `.env` or `/config/database.php`

Run the database migration and seed sample data
```
php artisan migrate:refresh --seed
```

## Available Routes
Method | URI | Description 
------ | --- | ----
GET\|HEAD  | api/college                | View a list of all schools   
POST      | api/college                | Add a school to the database   
POST      | api/college/csv            | Export a CSV of selected schools                
GET\|HEAD  | api/college/{college}      | View data from single school    
PUT\|PATCH | api/college/{college}      | Edit an existing school  
DELETE    | api/college/{college}      | Remove a school from the database 