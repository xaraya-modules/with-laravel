<?php

namespace Xaraya\LaravelApp\WebhookClients;

use Illuminate\Http\Request;
use Spatie\WebhookClient\WebhookProfile\WebhookProfile as Profile;

class AnyWebhookProfile implements Profile
{
    public function shouldProcess(Request $request): bool
    {
        // ...
        return true;
    }
}
