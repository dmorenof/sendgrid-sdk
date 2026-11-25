<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\User\Webhooks\Event\Settings;

final class All extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/user/webhooks/event/settings/all',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\EventWebhook\\All\\Response',
    ];

    /**
     * Retrieve all of your Event Webhooks.
     *
     * **This endpoint allows you to retrieve all of your Event Webhooks.**
     *
     * Each webhook will be returned as an object in the `webhooks` array with the webhook's configuration details and ID. You can use a webhook's ID to [update the webhook's settings](https://docs.sendgrid.com/api-reference/webhooks/update-an-event-webhook), [delete the webhook](https://docs.sendgrid.com/api-reference/webhooks/delete-an-event-webhook), [enable or disable signature verification for the webhook](https://docs.sendgrid.com/api-reference/webhooks/toggle-signature-verification-for-an-event-webhook), and, if signature verification is enabled, [retrieve the webhook's public key](https://docs.sendgrid.com/api-reference/webhooks/get-signed-event-webhooks-public-key) when signature verification is enabled.
     *
     * ### Event settings
     *
     * Each webhook's settings determine which events will be included in the POST request by the webhook and the URL where the request will be sent. See the [**Event Webhook Reference**](https://docs.sendgrid.com/for-developers/tracking-events/event#delivery-events) for details about each event type.
     *
     * ### Signature verification
     *
     * The `public_key` property will be returned only for webhooks with signature verification enabled.
     *
     * ### OAuth
     *
     * You may share one OAuth configuration across all your webhooks or create unique credentials for each. The OAuth properties will be returned only for webhooks with OAuth configured.
     */
    public function get(?\SendGridSDK\GetParams\V3\User\Webhooks\Event\Settings\All $params = null): \SendGridSDK\DTOs\EventWebhook\All\Response
    {
        /** @var \SendGridSDK\DTOs\EventWebhook\All\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
