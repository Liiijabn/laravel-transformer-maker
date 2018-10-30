# laravel-transformer-maker
A Laravel 5 package to create model Fractal Transformers


#  Installation && Usage

```
composer require liiijabn/laravel-transformer-maker
```

Artisan `make` command:

```php artisan make:transformer User```


**Notice**:

You should put models in `App/Models` Folder, or change the code `use App\Models\User;` 
in `App/Transformers/UserTransform.php` to `use App\User;` manually.



