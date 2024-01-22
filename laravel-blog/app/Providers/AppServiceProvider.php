<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
    // the boot method is automatically called by laravel's service container when application is bootstrapped
    public function boot()
    {
        Schema::defaultStringLength(191);
        // this code affects global setting, that all CHAR or VARCHAR columns when creating tables using migration. it sets the default length for string columns to 191 characters.
    }
}
