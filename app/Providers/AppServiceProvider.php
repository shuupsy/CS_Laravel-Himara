<?php

namespace App\Providers;

use App\Models\Room;
use App\Models\Hotel;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Request;
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

        /* Rendre accessible la variable dans tous les controllers et blades */
        view()->composer('*', function ($view){
            $available = Room::where('is_Available', 1)->get();
            $view->with('available', $available );
        });

        /* Page Title */
        view()->composer('*', function ($view){
            $display = Request::is('/')  || Request::is('dashboard');

            $view->with('display', $display );
        });

        /* Pagination Bootstrap */
        Paginator::useBootstrap();
        Paginator::defaultView('vendor.pagination.bootstrap-5');

    }
}
