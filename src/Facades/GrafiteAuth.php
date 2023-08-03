<?php

namespace Grafite\Auth\Facades;

use Illuminate\Support\Facades\Facade;

class GrafiteAuth extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'grafite-auth';
    }

    /**
     * Register the typical authentication routes for an application.
     *
     * @param  array  $options
     * @return void
     */
    public static function routes(array $options = [], array $middleware = [])
    {
        static::$app->make('router')->auth($options, $middleware);
    }
}
