<?php

namespace App;

use Illuminate\Support\ServiceProvider;

/**
 * Class PasswordServiceProvider
 */
class ConnectionServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function test()
    {
        $this->app->singleton('randomPassword', Connect::class);
    }
}