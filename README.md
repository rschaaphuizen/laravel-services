# Package to create services with artisan

This Laravel package creates an artisan command to generate services.

``` bash
php artisan make:service NameService
```

Optionally, you can create the service as an abstract class by adding the option:

``` bash
php artisan make:service NameService --abstract
```

Register the created Service in the ServiceProvider (ex ServicesServiceProvider)

``` bash
<?php
 
namespace App\Providers;
 
use App\Services\NameService;
use Illuminate\Support\ServiceProvider;
 
class ServicesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
 
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('NameService', function ($app) {
            return new NameService();
        });
    }
}
```

> **Registering the Service is not needed if the Service is created as an abstract class**

Inject your service through your constructor of the desired controller

``` bash
<?php

namespace App\Http\Controllers;
 
use App\Services\NameService;
use Illuminate\Http\Request;
 
class ExampleController extends Controller
{
    /**
     * @var NameService
     */
    protected $nameService;
 
    /**
     * ExampleController constructor.
     * @param NameService $nameService
     */
    public function __construct(NameService $nameService)
    {
        $this->nameService = $nameService;
    }
    
    // the rest of your controller

}
```

## Installation and usage

This package requires PHP 7 and Laravel 5.5 or higher. Install the package by running the following command in your console;

``` bash
composer require rschaaphuizen/laravel-services
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Security

If you discover any security-related issues, please email r.schaaphuizen@sqits.nl instead of using the issue tracker.

## Credits

- [Ruud Schaaphuizen](https://github.com/rschaaphuizen)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.