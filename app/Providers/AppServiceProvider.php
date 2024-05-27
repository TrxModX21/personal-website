<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $general = gs();
        $viewShare['general'] = $general;
        $viewShare['emptyMessage'] = 'Currently there is no data!';

        view()->share($viewShare);
    }
}
