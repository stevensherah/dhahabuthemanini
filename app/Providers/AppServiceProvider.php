<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
        view()->composer('include.sidebar', function ($view) {

            $view->with('archives', \App\Post::archives());

            $view->with('tags', \App\Tag::pluck('name'));
            
            
        });

        view()->composer('include.productdropdown', function ($view) {

            $view->with('archives', \App\Product::products());
            
            
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
