<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;

use View;

class ViewComposerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        View::composer(
                //
                '*', 'App\Http\View\Composers\NavigationComposer'
        );
    }
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // TODO: Implement register() method.
    }
}