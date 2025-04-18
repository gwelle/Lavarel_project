<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
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
        //Lorsqu'une vue blade prends en charge la pagination, on pourrait avoir un problème d'affichage
        //Cette ligne sers a préciser que nous allons utiliser la pagination de boostrap et non de laravel
        Paginator::useBootstrap();
    }
}
