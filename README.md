# Laravel Khipu Package

[Khipu](http://khipu.com) It's a chilean payment gateway to automate wire transfers. You can checkout the Khipu API documentation [here](https://khipu.com/page/api).

This project is based on the amazing guys of Tifón and Freshwork Studio.
[https://github.com/khipu/lib-php](https://github.com/khipu/lib-php)


## Installation

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

### Step 3: Add the alias

In the `app/config/app.php` file, add the following to the `aliases`  array:
```php
'aliases' => array(
    …
    'Khipu' => 'FreshworkStudio\LaravelKhipu\Facades\Khipu',
    …
),
```

### Step 3: Publish the configuration


```sh
$ pa vendor:publish --provider="FreshworkStudio\LaravelKhipu\KhipuServiceProvider"
```

### Step 4: Configure your .env or edit you brand new `config/khipu.php`
```
...
KHIPU_ID=99999
KHIPU_KEY=ec19c08f3bdb2162e99144b1f6b9c0e2fe1856e0
```

### Step 5: Enjoy!

## Usage

#### Option A: use the Facade
```php 
//routes.php

Route::get('/', function () {
    $banks =  Khipu::loadService('ReceiverBanks')->consult();
    
    echo $banks;
});
```

#### Option B: Typehint the class
 
TypeHint the `FreshworkStudio\Khipu\Khipu` class. 
It'll be automatically authenticated using your configuration credentials (KHIPU_ID and KHIPU_KEY)

```php 
//routes.php

Route::get('/', function (FreshworkStudio\Khipu\Khipu $khipu) {
    $banks =  $khipu->loadService('ReceiverBanks')->consult();
	
	//You can also can call the service as a properties of the class..
	$khipu->ReceiverBanks->consult();
    
    echo $banks;
});
```