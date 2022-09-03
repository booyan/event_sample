<?php

namespace Booyan\ExtraMessage\Listeners;

use Booyan\EventManager\Events\HelloMessageEvent;
use Illuminate\Support\Facades\Log;

class ExtraMessageListener
{
    public function __construct()
    {
    }

    public function handle(HelloMessageEvent $event)
    {
        Log::info("プラグインのイベントより出力");
    }
}
