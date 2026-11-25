<?php

declare(strict_types=1);

namespace SendGridSDK\V3\User\Webhooks\Event\Settings;

final class Signed extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/user/webhooks/event/settings/signed/{id} [operationId: GetSignedEventWebhook] */
    /**
     * Get Signed Event Webhook's Public Key
     *
     * **This endpoint allows you to retrieve the public key for a single Event Webhook by ID.**
     *
     * If you do not pass a webhook ID to this endpoint, it will return the public key for your oldest webhook by `created_date`. This means the default key returned by this endpoint when no ID is provided will be for the first webhook you created. This functionality allows customers who do not have multiple webhooks to use this endpoint to retrieve their only webhook's public key, even if they do not supply an ID. If you have multiple webhooks, you can retrieve their IDs using the [**Get All Event Webhooks**](https://docs.sendgrid.com/api-reference/webhooks/get-all-event-webhooks) endpoint.
     *
     * Once you have enabled signature verification for a webhook, you will need the public key provided to verify the signatures on requests coming from Twilio SendGrid. You can use the webhook ID to [enable or disable signature verification with the endpoint dedicated for that operation](https://docs.sendgrid.com/api-reference/webhooks/toggle-signature-verification-for-an-event-webhook).
     *
     * For more information about cryptographically signing the Event Webhook, see [**Getting Started with the Event Webhook Security Features**](https://sendgrid.com/docs/for-developers/tracking-events/getting-started-event-webhook-security-features).
     */
    public static function getById(string $id, ?\SendGridSDK\GetParams\V3\User\Webhooks\Event\Settings\Signed\ById $params = null): \SendGridSDK\Responses\V3\User\Webhooks\Event\Settings\Signed\ById\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\User\Webhooks\Event\Settings\Signed::class)->getById($id, $params);
    }

    /** PATCH /v3/user/webhooks/event/settings/signed/{id} [operationId: UpdateSignedEventWebhook] */
    /**
     * Toggle signature verification for a single Event Webhook by ID
     *
     * **This endpoint allows you to enable or disable signature verification for a single Event Webhook by ID.**
     *
     * If you do not pass a webhook ID to this endpoint, it will enable signature verification for your oldest webhook by `created_date`. This means the default webhook operated on by this endpoint when no ID is provided will be the first one you created. This functionality allows customers who do not have multiple webhooks to enable or disable signature verifiction for their only webhook, even if they do not supply an ID. If you have multiple webhooks, you can retrieve their IDs using the [**Get All Event Webhooks**](https://docs.sendgrid.com/api-reference/webhooks/get-all-event-webhooks) endpoint.
     *
     * This endpoint accepts a single boolean request property, `enabled`, that can be set `true` or `false` to enable or disable signature verification. This endpoint will return the public key required to verify Twilio SendGrid signatures if it is enabled or an empty string if signing is disabled. You can also retrieve your public key using the [**Get an Event Webhook's Public Key**](https://docs.sendgrid.com/api-reference/webhooks/get-signed-event-webhooks-public-key) endpoint.
     *
     * For more information about cryptographically signing the Event Webhook, see [**Getting Started with the Event Webhook Security Features**](https://sendgrid.com/docs/for-developers/tracking-events/getting-started-event-webhook-security-features).
     */
    public static function patchById(string $id, ?\SendGridSDK\PatchParams\V3\User\Webhooks\Event\Settings\Signed\ById $params = null): \SendGridSDK\Responses\V3\User\Webhooks\Event\Settings\Signed\ById\Patch
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\User\Webhooks\Event\Settings\Signed::class)->patchById($id, $params);
    }
}
