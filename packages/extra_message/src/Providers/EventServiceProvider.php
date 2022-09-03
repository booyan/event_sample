<?php

namespace Booyan\ExtraMessage\Providers;

use Booyan\EventManager\Events\HelloMessageEvent;
use Booyan\ExtraMessage\Listeners\ExtraMessageListener;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [];

    public function boot()
    {
        Event::listen(HelloMessageEvent::class, [ExtraMessageListener::class, 'handle']);
    }
}
