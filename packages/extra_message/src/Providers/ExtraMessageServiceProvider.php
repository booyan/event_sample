<?php

namespace Booyan\ExtraMessage\Providers;

use Illuminate\Support\ServiceProvider;

class ExtraMessageServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->register(EventServiceProvider::class);
    }

    public function boot()
    {
    }
}
