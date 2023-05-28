<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Contracts\Auth\Guard; 


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
    public function boot(Guard $auth): void
    {
        //
        Schema::defaultStringLength(191);
        View::composer('*', function ($view) use ($auth) {
            $view->with('currentAuthenticatedUser', $auth->user());
        });


    }
}
