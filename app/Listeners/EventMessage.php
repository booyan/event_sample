<?php

namespace App\Listeners;

use Booyan\EventManager\Events\HelloMessageEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class EventMessage
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  HelloMessageEvent  $event
     * @return void
     */
    public function handle(HelloMessageEvent $event)
    {
        Log::info("本体のイベントより出力");
    }
}
