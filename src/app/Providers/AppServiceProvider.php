<?php

namespace App\Providers;

use App\Http\Middleware\CheckDoorAccess;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->app['router']->aliasMiddleware('check.door.access', CheckDoorAccess::class);
    }
}