<?php

namespace App\SignatureValidator;

use Illuminate\Http\Request;
use Spatie\WebhookClient\WebhookConfig;
use Spatie\WebhookClient\SignatureValidator\SignatureValidator as Validator;

class AnySignatureValidator implements Validator
{
    public function isValid(Request $request, WebhookConfig $config): bool
    {
        //
        return true;
    }
}
