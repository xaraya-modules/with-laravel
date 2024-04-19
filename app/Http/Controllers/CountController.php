<?php

namespace Xaraya\LaravelApp\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
//use Spatie\WebhookClient\Models\WebhookCall;
use Illuminate\Support\Facades\Queue;

class CountController extends Controller
{
    public function show(
        Request $request
    ): View {
        //$model = WebhookCall::class;
        //$count = WebhookCall::count();
        $queueName = Queue::getName();
        $queueSize = Queue::size();
        return view('count', ['queueName' => $queueName, 'queueSize' => $queueSize]);
    }
}
