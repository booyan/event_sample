<?php

namespace App\Http\Controllers;

use Booyan\EventManager\Events\HelloMessageEvent;
use Illuminate\Support\Facades\Log;

class HelloController extends Controller
{
    public function __invoke()
    {
        $messages = ['Hello World!'];
        Log::info("本体よりログ出力");
        HelloMessageEvent::dispatch();
        return view('hello', ['messages' => $messages]);
    }
}
