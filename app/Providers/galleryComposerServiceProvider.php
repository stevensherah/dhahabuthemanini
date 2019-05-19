<?php

namespace App\Providers;

use View;

use Illuminate\Support\ServiceProvider;

class galleryComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        View::composer('*', 'App\Http\View\Composers\GalleryComposer');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
