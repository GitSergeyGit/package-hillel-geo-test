<?php

namespace Hillel\Geo\Test;

use Illuminate\Support\ServiceProvider;

class GeoServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(GeoServiceInterface::class, function () {
            return new MaxmindService();
        });
    }
}
