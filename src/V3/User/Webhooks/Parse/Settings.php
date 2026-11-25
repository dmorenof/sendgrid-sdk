<?php

declare(strict_types=1);

namespace SendGridSDK\V3\User\Webhooks\Parse;

final class Settings extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/user/webhooks/parse/settings [operationId: ListParseSetting] */
    /**
     * Retrieve all parse settings
     *
     * **This endpoint allows you to retrieve all of your current inbound parse settings.**
     */
    public static function get(?\SendGridSDK\GetParams\V3\User\Webhooks\Parse\Settings $params = null): \SendGridSDK\Responses\V3\User\Webhooks\Parse\Settings\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\User\Webhooks\Parse\Settings::class)->get($params);
    }

    /** POST /v3/user/webhooks/parse/settings [operationId: CreateParseSetting] */
    /**
     * Create a parse setting
     *
     * **This endpoint allows you to create a new inbound parse setting.**
     *
     * Creating an Inbound Parse setting requires two pieces of information: a `url` and a `hostname`.
     *
     * The `hostname` must correspond to a domain authenticated by Twilio SendGrid on your account. If you need to complete domain authentication, you can use the [Twilio SendGrid App](https://app.sendgrid.com/settings/sender_auth) or the **Authenticate a Domain** endpoint. See [**How to Set Up Domain Authentication**](https://sendgrid.com/docs/ui/account-and-settings/how-to-set-up-domain-authentication/) for instructions.
     *
     * Any email received by the `hostname` will be parsed when you complete this setup. You must also add a Twilio SendGrid MX record to this domain's DNS records. See [**Setting up the Inbound Parse Webhook**](https://sendgrid.com/docs/for-developers/parsing-email/setting-up-the-inbound-parse-webhook/) for full instructions.
     *
     * The `url` represents a location where the parsed message data will be delivered. Twilio SendGrid will make an HTTP POST request to this `url` with the message data. The `url` must be publicly reachable, and your application must return a `200` status code to signal that the message data has been received.
     */
    public static function post(?\SendGridSDK\PostParams\V3\User\Webhooks\Parse\Settings $params = null): \SendGridSDK\DTOs\ParseSetting
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\User\Webhooks\Parse\Settings::class)->post($params);
    }

    /** DELETE /v3/user/webhooks/parse/settings/{hostname} [operationId: DeleteParseSetting] */
    /**
     * Delete a parse setting
     *
     * **This endpoint allows you to delete a specific inbound parse setting by hostname.**
     *
     * You can retrieve all your Inbound Parse settings and their associated host names with the "Retrieve all parse settings" endpoint.
     */
    public static function deleteByHostname(string $hostname, ?\SendGridSDK\DeleteParams\V3\User\Webhooks\Parse\Settings\ByHostname $params = null): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\User\Webhooks\Parse\Settings::class)->deleteByHostname($hostname, $params);
    }

    /** GET /v3/user/webhooks/parse/settings/{hostname} [operationId: GetParseSetting] */
    /**
     * Retrieve a specific parse setting
     *
     * **This endpoint allows you to retrieve a specific inbound parse setting by hostname.**
     *
     * You can retrieve all your Inbound Parse settings and their associated host names with the "Retrieve all parse settings" endpoint.
     */
    public static function getByHostname(string $hostname, ?\SendGridSDK\GetParams\V3\User\Webhooks\Parse\Settings\ByHostname $params = null): \SendGridSDK\DTOs\ParseSetting
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\User\Webhooks\Parse\Settings::class)->getByHostname($hostname, $params);
    }

    /** PATCH /v3/user/webhooks/parse/settings/{hostname} [operationId: UpdateParseSetting] */
    /**
     * Update a parse setting
     *
     * **This endpoint allows you to update a specific inbound parse setting by hostname.**
     *
     * You can retrieve all your Inbound Parse settings and their associated host names with the "Retrieve all parse settings" endpoint.
     */
    public static function patchByHostname(string $hostname, ?\SendGridSDK\PatchParams\V3\User\Webhooks\Parse\Settings\ByHostname $params = null): \SendGridSDK\DTOs\ParseSetting
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\User\Webhooks\Parse\Settings::class)->patchByHostname($hostname, $params);
    }
}
