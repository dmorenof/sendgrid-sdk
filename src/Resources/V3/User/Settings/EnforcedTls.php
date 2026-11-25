<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\User\Settings;

final class EnforcedTls extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/user/settings/enforced_tls',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            401 => '\\SendGridSDK\\DTOs\\EnforcedTlsErrorResponse',
            403 => '\\SendGridSDK\\DTOs\\EnforcedTlsErrorResponse',
            404 => '\\SendGridSDK\\DTOs\\EnforcedTlsErrorResponse',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\EnforcedTlsErrorResponse',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\DTOs\\EnforcedTlsErrorResponse',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\EnforcedTlsErrorResponse',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\EnforcedTlsRequestResponse',
    ];

    /**
     * Retrieve current Enforced TLS settings.
     *
     * **This endpoint allows you to retrieve your current Enforced TLS settings.**
     *
     * The Enforced TLS settings specify whether or not the recipient is required to support TLS or have a valid certificate.
     *
     * If either `require_tls` or `require_valid_cert` is set to `true`, the recipient must support TLS 1.1 or higher or have a valid certificate. If these conditions are not met, Twilio SendGrid will drop the message and send a block event with “TLS required but not supported” as the description.
     */
    public function get(?\SendGridSDK\GetParams\V3\User\Settings\EnforcedTls $params = null): \SendGridSDK\DTOs\EnforcedTlsRequestResponse
    {
        /** @var \SendGridSDK\DTOs\EnforcedTlsRequestResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array PATCH = [
        'method' => 'PATCH',
        'path' => '/v3/user/settings/enforced_tls',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            401 => '\\SendGridSDK\\DTOs\\EnforcedTlsErrorResponse',
            403 => '\\SendGridSDK\\DTOs\\EnforcedTlsErrorResponse',
            404 => '\\SendGridSDK\\DTOs\\EnforcedTlsErrorResponse',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\EnforcedTlsErrorResponse',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\DTOs\\EnforcedTlsErrorResponse',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\EnforcedTlsErrorResponse',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\EnforcedTlsRequestResponse',
        'requestBody' => [
            'type' => '\\SendGridSDK\\DTOs\\EnforcedTlsRequestResponse',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update Enforced TLS settings
     *
     * **This endpoint allows you to update your Enforced TLS settings.**
     *
     * To require TLS from recipients, set `require_tls` to `true`. If either `require_tls` or `require_valid_cert` is set to `true`, the recipient must support TLS 1.1 or higher or have a valid certificate. If these conditions are not met, Twilio SendGrid will drop the message and send a block event with “TLS required but not supported” as the description.
     */
    public function patch(?\SendGridSDK\PatchParams\V3\User\Settings\EnforcedTls $params = null): \SendGridSDK\DTOs\EnforcedTlsRequestResponse
    {
        /** @var \SendGridSDK\DTOs\EnforcedTlsRequestResponse $result */
        $result = $this->executeArguments(self::operation(self::PATCH), parameters: $params);
        return $result;
    }
}
