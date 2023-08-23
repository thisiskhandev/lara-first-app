# _LARAVEL COMMANDS_
### Helping commands
php artisan help <br>
php aritsan help make:controller
### Run Laravel
php artisan run
### Create controller
php artisan make:controller [name of controller]
### Create invokable controller
php artisan make:controller [name of controller] --invokable
### Get list of all vendors
php artisan route:list --except-vendor
### Get list of selected routes only
php artisan route:list --path=user
### Create Table in DB (remeber to add prefix -> create and suffix -> table)
php artisan make:migration create_student_table
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