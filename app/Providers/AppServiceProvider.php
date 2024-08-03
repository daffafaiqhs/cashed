<?php

namespace App\Providers;

use Illuminate\Support\Facades;
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
        Facades\View::composer('login', function ($view) {
            $view->with('current_locale', app()->getlocale());
            $view->with('available_locales', config('app.available_locales'));
        });
    }
}
