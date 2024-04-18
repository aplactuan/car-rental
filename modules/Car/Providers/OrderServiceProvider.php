<?php

namespace Modules\Car\Providers;

use Illuminate\Support\ServiceProvider;

class OrderServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        $this->mergeConfigFrom(__DIR__ . '/../config.php', 'car');

        $this->app->register(RouteServiceProvider::class);
    }
}
