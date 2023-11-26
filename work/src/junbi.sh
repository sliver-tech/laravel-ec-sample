composer install
chmod -R 707 storage
php artisan key:generate
php artisan storage:link
php artisan migrate --seed
