<?php

namespace Xaraya\LaravelApp\WebhookClients;

use Illuminate\Http\Request;
use Spatie\WebhookClient\WebhookConfig;
use Spatie\WebhookClient\WebhookResponse\RespondsToWebhook;
use Symfony\Component\HttpFoundation\Response;

class AnyWebhookResponse implements RespondsToWebhook
{
    public function respondToValidWebhook(Request $request, WebhookConfig $config): Response
    {
        if (env('APP_WEBHOOK_ECHO')) {
            if ($request->method() == 'POST' && $request->isJson()) {
                $data = $request->json()->all();
                $data['response'] = 'ok';
            } else {
                $data = ['message' => 'ok'];
            }
            $type = 'hello';
            $name = $request->get('name', 'laravel');
            $data[$type] ??= rawurlencode($name);
            $data['method'] ??= $request->getMethod();
            return response()->json($data);
        }
        return response()->json(['message' => 'ok']);
    }
}
