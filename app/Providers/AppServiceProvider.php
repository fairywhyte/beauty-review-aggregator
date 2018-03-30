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
    {//added the results.blade.php to view
        \View::composer(
            'results', 'App\Http\ViewComposers\ResultsComposer'
        );
        \View::composer(
            'navbar', 'App\Http\ViewComposers\NavbarComposer'
        );
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
