<?php

namespace FreshworkStudio\LaravelKhipu;

use FreshworkStudio\Khipu;
use Illuminate\Support\ServiceProvider;

class KhipuServiceProvider extends ServiceProvider
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
        $this->bindKhipuClass();
    }

    private function bindKhipuClass()
    {
        $this->app->bind(Khipu::class, function ($app) {
            return new Khipu(config('khipu.id'), config('khipu.key'));
        });
    }
}