<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Define your route model bindings, pattern filters, etc.
     */
    public function boot(): void
    {
        $this->routes(function () {
            // Load regular web routes
            Route::middleware('web')
                ->group(base_path('routes/web.php'));

            // Load separate admin routes
            Route::middleware('web')
                ->group(base_path('routes/admin.php'));
        
        });
    }
}