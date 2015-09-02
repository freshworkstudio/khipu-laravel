# Laravel Khipu Package

[Khipu](http://khipu.com) It's a chilean payment gateway to automate wire transfers. You can checkout the Khipu API documentation [here](https://khipu.com/page/api).

This project is based on the amazing guys of Tifón and Freshwork Studio.
[https://github.com/khipu/lib-php](https://github.com/khipu/lib-php)


## Usage

### Step 1: Install Through Composer

```
composer require freshworkstudio/khipu-laravel
```

### Step 2: Add the Service Provider

In the `app/config/app.php` file, add the following to the `providers`  array:
```php
'providers' => array(
    …
    'FreshworkStudio\LaravelKhipu\KhipuServiceProvider',
    …
),
```

### Step 3: Publish the configuration


```sh
$ php artisan config:publish freshworkstudio/khipu-laravel
```

### Step 4: Configure your .env
```
...
KHIPU_ID=99999
KHIPU_KEY=ec19c08f3bdb2162e99144b1f6b9c0e2fe1856e0
```

### Step 5: Enjoy!
