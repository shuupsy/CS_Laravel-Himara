<?php

namespace App\Providers;

use App\Models\Hotel;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /* Rendre accessible la variable dans tous les controllers et blades */
        view()->composer('*', function ($view){
            $hotel = Hotel::first();
            $view->with('hotel', $hotel );
        });

        /* Pagination Bootstrap */
        Paginator::useBootstrap();
        Paginator::defaultView('vendor.pagination.bootstrap-5');

    }
}
