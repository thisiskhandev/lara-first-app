# _LARAVEL COMMANDS_

### Helping commands

php artisan help <br>
php aritsan help make:controller

### Run Laravel

php artisan serve

### Create controller

php artisan make:controller [name of controller]

### Create invokable controller

php artisan make:controller [name of controller] --invokable

### Get list of all vendors

php artisan route:list --except-vendor

### Get list of selected routes only

php artisan route:list --path=user

### Create Table in DB (remeber to add prefix -> create and suffix -> table)

php artisan make:migration create_students_table

### Check status of migrations

php artisan migrate:status

### Run/Deploy migration on phpmyadmin

php artisan migrate

### Run/Deploy migration on phpmyadmin on PRODUCTION

php artisan migrate --force

### Rollback (Undo) to previous work

php artisan migrate:rollback

### Rollback using flag steps (how much you want back)

php artisan migrate:rollback --step=3

### Rollback using flag to specific point undo

php artisan migrate:rollback --batch=2

### Reset all migrations at once

php artisan migrate:reset

### Rollback migration & Run migration

php artisan migrate:refresh

### Delete tables & create tables & run migration

php artisan migrate:fresh

### Add a new column in a specific table

php artisan make:migration update_students_table --table=students

### Rename an existing table name

php artisan make:migration rename_student_to_students_table

<pre>
public function up()
    {
        Schema::rename('old_table_name', 'new_table_name');
    }
</pre>
<pre>
public function down()
    {
        Schema::rename('new_table_name', 'old_table_name');
    }
</pre>

### Clear cache/config

php artisan cache:clear <br/>
php artisan config:clear

### Make Model (Note: Create with a name as a Singular not plural)

php artisan make:model _student_

### Create a seeder (Note: Always add _Seeder_ in a camel case)

php artisan make:seeder StudentSeeder

### Run all seed commands in _DatabaseSeeder_ file

php artisan db:seed
