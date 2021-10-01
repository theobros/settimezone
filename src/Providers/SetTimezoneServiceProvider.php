<?php

namespace Theobros\SetTimezone\Providers;

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Support\ServiceProvider;
use Theobros\SetTimezone\Http\Middleware\SetTimezoneMiddleware;

class SetTimezoneServiceProvider extends ServiceProvider
{
    /**
     * boot
     *
     * @return void
     */
    public function boot()
    {
        $kernel = $this->app->make(Kernel::class);
        $kernel->pushMiddleware(SetTimezoneMiddleware::class);
    }
}
