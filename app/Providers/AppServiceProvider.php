<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // HOW IT SHOULD BE
        // view()->composer('include.sidebar', function ($view) {

        //     $archives =  \App\Post::archives();

        //     $tags = \App\Tag::has('posts')->pluck('name');

        //     $view->with(compact('archives', 'tags'));
            
            
        // });
        
        view()->composer('include.sidebar', function ($view) {

            $view->with('archives', \App\Post::archives());

            $view->with('tags', \App\Tag::pluck('name'));
            
            
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
