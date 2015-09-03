<?php

namespace FreshworkStudio\LaravelKhipu;

use FreshworkStudio\Khipu\Khipu;
use Illuminate\Support\ServiceProvider;

class KhipuServiceProvider extends ServiceProvider
{
    /**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
    protected $defer = false;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/config.php' => config_path('khipu.php'),
        ]);
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->bindKhipuClass();
    }

    private function bindKhipuClass()
    {
        $this->app->bind(Khipu::class, function ($app) {
            return new Khipu(config('khipu.id'), config('khipu.key'));
        });
    }

    public function provides()
    {
        return array(Khipu::class);
    }
}