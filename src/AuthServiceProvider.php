<?php

namespace Mods\Auth;

use Mods\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {   
        $this->publishes([
            __DIR__.'/../config/auth.php' => config_path('auth.php'),
        ], 'config');

        $this->mergeConfigFrom(
            __DIR__.'/../config/auth.php', 'auth'
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
