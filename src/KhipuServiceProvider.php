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
            $khipu = new Khipu();
            $khipu->authenticate(config('khipu.id'), config('khipu.key'));
            return $khipu;
        });
    }

    public function provides()
    {
        return array(Khipu::class);
    }
}