to run the program you need local server with:
```
php >= 8.1
mysql 8.0
composer
```

then

```
git clone https://github.com/dmisl/recipe.git
cd recipe
```
copy .env.example and copy rename to .env
```
php artisan key:generate
php artisan migrate --seed
php artisan serve
```
