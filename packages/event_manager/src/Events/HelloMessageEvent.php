<?php

namespace Booyan\EventManager\Events;

use Illuminate\Foundation\Events\Dispatchable;

class HelloMessageEvent
{
    use Dispatchable;

    public function __construct()
    {
    }
}
