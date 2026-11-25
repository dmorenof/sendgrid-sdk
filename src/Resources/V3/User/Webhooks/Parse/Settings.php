<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\User\Webhooks\Parse;

final class Settings extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/user/webhooks/parse/settings',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            401 => '\\SendGridSDK\\DTOs\\WebhooksErrorResponse',
            403 => '\\SendGridSDK\\DTOs\\WebhooksErrorResponse',
            404 => '\\SendGridSDK\\DTOs\\WebhooksErrorResponse',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\WebhooksErrorResponse',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\DTOs\\WebhooksErrorResponse',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\WebhooksErrorResponse',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\User\\Webhooks\\Parse\\Settings\\Get',
    ];

    /**
     * Retrieve all parse settings
     *
     * **This endpoint allows you to retrieve all of your current inbound parse settings.**
     */
    public function get(?\SendGridSDK\GetParams\V3\User\Webhooks\Parse\Settings $params = null): \SendGridSDK\Responses\V3\User\Webhooks\Parse\Settings\Get
    {
        /** @var \SendGridSDK\Responses\V3\User\Webhooks\Parse\Settings\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/user/webhooks/parse/settings',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'errors' => [
            401 => '\\SendGridSDK\\DTOs\\WebhooksErrorResponse',
            403 => '\\SendGridSDK\\DTOs\\WebhooksErrorResponse',
            404 => '\\SendGridSDK\\DTOs\\WebhooksErrorResponse',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\WebhooksErrorResponse',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\DTOs\\WebhooksErrorResponse',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\WebhooksErrorResponse',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\ParseSetting',
        'requestBody' => [
            'type' => '\\SendGridSDK\\DTOs\\ParseSetting',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

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
    public function post(?\SendGridSDK\PostParams\V3\User\Webhooks\Parse\Settings $params = null): \SendGridSDK\DTOs\ParseSetting
    {
        /** @var \SendGridSDK\DTOs\ParseSetting $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

    private const array DELETE_BY_HOSTNAME = [
        'method' => 'DELETE',
        'path' => '/v3/user/webhooks/parse/settings/{hostname}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            204,
        ],
        'errors' => [
            401 => '\\SendGridSDK\\DTOs\\WebhooksErrorResponse',
            403 => '\\SendGridSDK\\DTOs\\WebhooksErrorResponse',
            404 => '\\SendGridSDK\\DTOs\\WebhooksErrorResponse',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\WebhooksErrorResponse',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\DTOs\\WebhooksErrorResponse',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\WebhooksErrorResponse',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
    ];

    /**
     * Delete a parse setting
     *
     * **This endpoint allows you to delete a specific inbound parse setting by hostname.**
     *
     * You can retrieve all your Inbound Parse settings and their associated host names with the "Retrieve all parse settings" endpoint.
     */
    public function deleteByHostname(string $hostname, ?\SendGridSDK\DeleteParams\V3\User\Webhooks\Parse\Settings\ByHostname $params = null): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_HOSTNAME), path: ['hostname' => $hostname], parameters: $params);
        return;
    }

    private const array GET_BY_HOSTNAME = [
        'method' => 'GET',
        'path' => '/v3/user/webhooks/parse/settings/{hostname}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            401 => '\\SendGridSDK\\DTOs\\WebhooksErrorResponse',
            403 => '\\SendGridSDK\\DTOs\\WebhooksErrorResponse',
            404 => '\\SendGridSDK\\DTOs\\WebhooksErrorResponse',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\WebhooksErrorResponse',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\DTOs\\WebhooksErrorResponse',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\WebhooksErrorResponse',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\ParseSetting',
    ];

    /**
     * Retrieve a specific parse setting
     *
     * **This endpoint allows you to retrieve a specific inbound parse setting by hostname.**
     *
     * You can retrieve all your Inbound Parse settings and their associated host names with the "Retrieve all parse settings" endpoint.
     */
    public function getByHostname(string $hostname, ?\SendGridSDK\GetParams\V3\User\Webhooks\Parse\Settings\ByHostname $params = null): \SendGridSDK\DTOs\ParseSetting
    {
        /** @var \SendGridSDK\DTOs\ParseSetting $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_HOSTNAME), path: ['hostname' => $hostname], parameters: $params);
        return $result;
    }

    private const array PATCH_BY_HOSTNAME = [
        'method' => 'PATCH',
        'path' => '/v3/user/webhooks/parse/settings/{hostname}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            401 => '\\SendGridSDK\\DTOs\\WebhooksErrorResponse',
            403 => '\\SendGridSDK\\DTOs\\WebhooksErrorResponse',
            404 => '\\SendGridSDK\\DTOs\\WebhooksErrorResponse',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\WebhooksErrorResponse',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\DTOs\\WebhooksErrorResponse',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\WebhooksErrorResponse',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\ParseSetting',
        'requestBody' => [
            'type' => '\\SendGridSDK\\DTOs\\ParseSetting',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update a parse setting
     *
     * **This endpoint allows you to update a specific inbound parse setting by hostname.**
     *
     * You can retrieve all your Inbound Parse settings and their associated host names with the "Retrieve all parse settings" endpoint.
     */
    public function patchByHostname(string $hostname, ?\SendGridSDK\PatchParams\V3\User\Webhooks\Parse\Settings\ByHostname $params = null): \SendGridSDK\DTOs\ParseSetting
    {
        /** @var \SendGridSDK\DTOs\ParseSetting $result */
        $result = $this->executeArguments(self::operation(self::PATCH_BY_HOSTNAME), path: ['hostname' => $hostname], parameters: $params);
        return $result;
    }
}
