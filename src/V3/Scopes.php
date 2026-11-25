<?php

declare(strict_types=1);

namespace SendGridSDK\V3;

final class Scopes extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/scopes [operationId: ListScope] */
    /**
     * Retrieve a list of scopes for which this user has access.
     *
     * **This endpoint returns a list of all scopes that this user has access to.**
     *
     * API Keys are used to authenticate with [SendGrid's v3 API](https://docs.sendgrid.com/api-reference/how-to-use-the-sendgrid-v3-api/authorization).
     *
     * API Keys may be assigned certain permissions, or scopes, that limit which API endpoints they are able to access.
     *
     * This endpoint returns all the scopes assigned to the key you use to authenticate with it. To retrieve the scopes assigned to another key, you can pass an API key ID to the "Retrieve an existing API key" endpoint.
     *
     * For a more detailed explanation of how you can use API Key permissions, please visit our [API Keys documentation](https://sendgrid.com/docs/ui/account-and-settings/api-keys/).
     */
    public static function get(?\SendGridSDK\GetParams\V3\Scopes $params = null): \SendGridSDK\Responses\V3\Scopes\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Scopes::class)->get($params);
    }
}
