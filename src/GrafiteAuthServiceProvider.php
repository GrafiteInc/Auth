<?php

namespace Grafite\Auth;

use Grafite\Auth\AuthCommand;
use Grafite\Auth\AuthRouteMethods;
use Illuminate\Support\Facades\Route;
use Grafite\Auth\ControllersCommand;
use Illuminate\Support\ServiceProvider;

class GrafiteAuthServiceProvider extends ServiceProvider
{
    /**
     * Register the package services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                AuthCommand::class,
                ControllersCommand::class,
            ]);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Route::mixin(new AuthRouteMethods);
    }
}
