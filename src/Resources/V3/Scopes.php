<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3;

final class Scopes extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/scopes',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            401 => '\\SendGridSDK\\Responses\\Errors\\V3\\Scopes\\GetStatus401Response',
            403 => '\\SendGridSDK\\DTOs\\ScopesErrorResponse',
            404 => '\\SendGridSDK\\DTOs\\ScopesErrorResponse',
            500 => '\\SendGridSDK\\DTOs\\ScopesErrorResponse',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\V3\\Scopes\\GetStatus401Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\DTOs\\ScopesErrorResponse',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\ScopesErrorResponse',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\DTOs\\ScopesErrorResponse',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Scopes\\Get',
    ];

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
    public function get(?\SendGridSDK\GetParams\V3\Scopes $params = null): \SendGridSDK\Responses\V3\Scopes\Get
    {
        /** @var \SendGridSDK\Responses\V3\Scopes\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
