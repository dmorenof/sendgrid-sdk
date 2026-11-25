<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\User\Webhooks\Event;

final class Settings extends \SendGridSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/user/webhooks/event/settings',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'errors' => [
            400 => '\\SendGridSDK\\Responses\\Errors\\Status400Variant16Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status400Variant16Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\EventWebhook\\Unsigned\\Response',
        'requestBody' => [
            'type' => '\\SendGridSDK\\DTOs\\EventWebhook\\Request',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Create a new Event Webhook
     *
     * **This endpoint allows you to create a new Event Webhook.**
     *
     * When creating a webhook, you will provide a URL where you want the webhook to send POST requests, and you will select which events you want to receive in those request. See the [**Event Webhook Reference**](https://docs.sendgrid.com/for-developers/tracking-events/event#delivery-events) for details about each event type.
     *
     * ### Webhook identifiers
     *
     * When your webhook is succesfully created, you will receive a webhook `id` in the response returned by this endpoint. You can use that ID to [update the webhook's settings](https://docs.sendgrid.com/api-reference/webhooks/update-an-event-webhook), [delete the webhook](https://docs.sendgrid.com/api-reference/webhooks/delete-an-event-webhook), [enable or disable signature verification for the webhook](https://docs.sendgrid.com/api-reference/webhooks/toggle-signature-verification-for-an-event-webhook), and, if signature verification is enabled, [retrieve the webhook's public key](https://docs.sendgrid.com/api-reference/webhooks/get-signed-event-webhooks-public-key).
     *
     * You may also assign an optional friendly name to each of your webhooks. The friendly name is for convenience only and should not be used to programmatically differentiate your webhooks because it does not need to be unique. Use the webhook ID to reliably differentiate among your webhooks.
     *
     * ### OAuth
     *
     * You can optionally configure OAuth verification for your webhook at the time of creation by passing the appropriate values in the `oauth_client_id`, `oauth_client_secret`, and `oauth_token_url` properties. You can enable or disable OAuth for the webhook after creation with the [**Update an Event Webhook**](https://docs.sendgrid.com/api-reference/webhooks/update-an-event-webhook) operation.
     *
     * You may share one OAuth configuration across all your webhooks or create unique credentials for each. See our [webhook security documentation](https://docs.sendgrid.com/for-developers/tracking-events/getting-started-event-webhook-security-features#oauth-20) for details about OAuth and the Event Webhook.
     *
     * ### Signature verification
     *
     * Enabling signature verification for your webhook is a separate process and cannot be done at the time of creation with this endpoint. You can use the webhook ID to [enable or disable signature verification with the endpoint dedicated for that operation](https://docs.sendgrid.com/api-reference/webhooks/toggle-signature-verification-for-an-event-webhook).
     */
    public function post(?\SendGridSDK\PostParams\V3\User\Webhooks\Event\Settings $params = null): \SendGridSDK\DTOs\EventWebhook\Unsigned\Response
    {
        /** @var \SendGridSDK\DTOs\EventWebhook\Unsigned\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

    private const array DELETE_BY_ID = [
        'method' => 'DELETE',
        'path' => '/v3/user/webhooks/event/settings/{id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            204,
        ],
        'errors' => [
            404 => '\\SendGridSDK\\Responses\\Errors\\Status404Variant10Response',
        ],
        'errorResponses' => [
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status404Variant10Response',
                'schemaNullable' => false,
            ],
        ],
    ];

    /**
     * Delete a single Event Webhook by ID.
     *
     * **This endpoint allows you to delete a single Event Webhook by ID.**
     *
     * Unlike the [**Get an Event Webhook**](https://docs.sendgrid.com/api-reference/webhooks/get-an-event-webhook) and [**Update an Event Webhook**](https://docs.sendgrid.com/api-reference/webhooks/update-an-event-webhook) endpoints, which will operate on your oldest webhook by `created_date` when you don't provide an ID, this endpoint will return an error if you do not pass it an ID. This behavior prevents customers from unintentionally deleting a webhook. You can retrieve your webhooks' IDs using the [**Get All Event Webhooks**](https://docs.sendgrid.com/api-reference/webhooks/get-all-event-webhooks) endpoint.
     *
     * ### Enable or disable the webhook
     *
     * This endpoint will permanently delete the webhook specified. If you instead want to disable a webhook, you can set the `enabled` property to `false` with the [**Update an Event Webhook**](https://docs.sendgrid.com/api-reference/webhooks/update-an-event-webhook) endpoint.
     */
    public function deleteById(string $id, ?\SendGridSDK\DeleteParams\V3\User\Webhooks\Event\Settings\ById $params = null): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_ID), path: ['id' => $id], parameters: $params);
        return;
    }

    private const array GET_BY_ID = [
        'method' => 'GET',
        'path' => '/v3/user/webhooks/event/settings/{id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            404 => '\\SendGridSDK\\Responses\\Errors\\Status404Variant10Response',
        ],
        'errorResponses' => [
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status404Variant10Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\EventWebhook\\NoDates\\Response',
    ];

    /**
     * Get the settings for a single Event Webhook.
     *
     * **This endpoint allows you to retrieve a single Event Webhook by ID.**
     *
     * If you do not pass a webhook ID to this endpoint, it will return your oldest webhook by `created_date`. This means the default webhook returned by this endpoint when no ID is provided will be the first one you created. This functionality allows customers who do not have multiple webhooks to use this endpoint to retrieve their only webhook, even if they do not supply an ID. If you have multiple webhooks, you can retrieve their IDs using the [**Get All Event Webhooks**](https://docs.sendgrid.com/api-reference/webhooks/get-all-event-webhooks) endpoint.
     *
     * ### Event settings
     *
     * Your webhook will be returned with all of its settings, which include the events that will be included in the POST request by the webhook and the URL where they will be sent. If an event type is marked as `true`, the event webhook will send information about that event type. See the [**Event Webhook Reference**](https://docs.sendgrid.com/for-developers/tracking-events/event#delivery-events) for details about each event type.
     *
     * ### Signature verification
     *
     * The `public_key` property will be returned only for webhooks with signature verification enabled.
     *
     * ### OAuth
     *
     * You may share one OAuth configuration across all your webhooks or create unique credentials for each. The OAuth properties will be returned only for webhooks with OAuth configured.
     */
    public function getById(string $id, ?\SendGridSDK\GetParams\V3\User\Webhooks\Event\Settings\ById $params = null): \SendGridSDK\DTOs\EventWebhook\NoDates\Response
    {
        /** @var \SendGridSDK\DTOs\EventWebhook\NoDates\Response $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_ID), path: ['id' => $id], parameters: $params);
        return $result;
    }

    private const array PATCH_BY_ID = [
        'method' => 'PATCH',
        'path' => '/v3/user/webhooks/event/settings/{id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\Responses\\Errors\\Status400Variant16Response',
            404 => '\\SendGridSDK\\Responses\\Errors\\Status404Variant10Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status400Variant16Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status404Variant10Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\EventWebhook\\Unsigned\\Response',
        'requestBody' => [
            'type' => '\\SendGridSDK\\DTOs\\EventWebhook\\Request',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update a single Event Webhook by ID.
     *
     * **This endpoint allows you to update a single Event Webhook by ID.**
     *
     * If you do not pass a webhook ID to this endpoint, it will update and return your oldest webhook by `created_date`. This means the default webhook updated by this endpoint when no ID is provided will be the first one you created. This functionality allows customers who do not have multiple webhooks to use this endpoint to update their only webhook, even if they do not supply an ID. If you have multiple webhooks, you can retrieve their IDs using the [**Get All Event Webhooks**](https://docs.sendgrid.com/api-reference/webhooks/get-all-event-webhooks) endpoint.
     *
     * ### Enable or disable the webhook
     *
     * You can set the `enabled` property to `true` to enable the webhook or `false` to disable it. Disabling a webhook will not delete it from your account, but it will prevent the webhook from sending events to your designated URL.
     *
     * ### URL
     *
     * A webhook's URL is the endpoint where you want the webhook to send POST requests containing event data. No more than one webhook may be configured to send to the same URL. SendGrid will return an error if you attempt to set a URL for a webhook that is already in use by the user on another webhook.
     *
     * ### Event settings
     *
     * If an event type is marked as `true`, the event webhook will send information about that event type. See the [**Event Webhook Reference**](https://docs.sendgrid.com/for-developers/tracking-events/event#delivery-events) for details about each event type.
     *
     * ### Webhook identifiers
     *
     * You may assign an optional friendly name to each of your webhooks. The friendly name is for convenience only and should not be used to programmatically differentiate your webhooks because it does not need to be unique.
     *
     * ### OAuth
     *
     * You can configure OAuth for your webhook by passing the required values to this endpoint in the `oauth_client_id`, `oauth_client_secret`, and `oauth_token_url` properties. To disable OAuth, pass an empty string to this endpoint for each of the OAuth properties. You may share one OAuth configuration across all your webhooks or create unique credentials for each. See our [webhook security documentation](https://docs.sendgrid.com/for-developers/tracking-events/getting-started-event-webhook-security-features#oauth-20) for more detailed information about OAuth and the Event Webhook.
     *
     * ### Signature verification
     *
     * Enabling signature verification for your webhook is a separate process and cannot be done with this endpoint. You can use the webhook ID to [enable or disable signature verification with the endpoint dedicated for that operation](https://docs.sendgrid.com/api-reference/webhooks/toggle-signature-verification-for-an-event-webhook).
     */
    public function patchById(string $id, ?\SendGridSDK\PatchParams\V3\User\Webhooks\Event\Settings\ById $params = null): \SendGridSDK\DTOs\EventWebhook\Unsigned\Response
    {
        /** @var \SendGridSDK\DTOs\EventWebhook\Unsigned\Response $result */
        $result = $this->executeArguments(self::operation(self::PATCH_BY_ID), path: ['id' => $id], parameters: $params);
        return $result;
    }
}
