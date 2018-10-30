# laravel-transformer-maker
A Laravel 5 package to create model Fractal Transformers


##  Installation 

```
composer require liiijabn/laravel-transformer-maker
```

**If your Laravel version is < 5.5**, then register the service provider:
 
```
// config/app.php

'providers' => [
    // ...
    Liiijabn\TransformerMaker\TransformerMakeServiceProvider::class,
];
```

## Usage

Artisan `make` command:

```
php artisan make:transformer User
```


### Notice:

You should put models in `App/Models` Folder, or change the code `use App\Models\User;` 
in `App/Transformers/UserTransform.php` to `use App\User;` manually.



