<?php

namespace Modules\Car\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(__DIR__ . '/../api.php');

//            Route::middleware('web')
//                ->group(base_path('routes/web.php'));
        });
    }
}
