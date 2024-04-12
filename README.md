# Integrate Xaraya with Laravel applications

This is a basic [Laravel Framework](https://laravel.com/docs/11.x/installation) application with a [Webhook Client](https://github.com/spatie/laravel-webhook-client)

Note: the **namespace** was changed from `App\` to `Xaraya\LaravelApp\` to avoid conflicts on loading with third party frameworks

To handle `/webhook/hello-laravel` requests:
1. app/WebhookClients/: `hello` [signature validator](./app/WebhookClients/AnySignatureValidator.php)
2. app/WebhookClients/: `any` [webhook profile](./app/WebhookClients/AnyWebhookProfile.php) (optional)
3. app/WebhookClients/: `any` [webhook response](./app/WebhookClients/AnyWebhookResponse.php) (optional)
4. app/Jobs/: `hello` [process webhook job](./app/Jobs/ProcessWebhookJob.php)
5. config/webhook-client.php: `default` [webhook client config](./config/webhook-client.php)
6. routes/web.php: `hello-laravel` [webhook routing](./routes/web.php)

You could use one of the many [existing packages](https://packagist.org/packages/spatie/laravel-webhook-client/dependents?order_by=downloads) to process webhook calls from other providers
