<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Partners\Accounts\ByAccountID;

final class State extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/partners/accounts/{accountID}/state',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\Responses\\Errors\\Status400Variant14Response',
            401 => '\\SendGridSDK\\Responses\\Errors\\Status401Variant3Response',
            403 => '\\SendGridSDK\\Responses\\Errors\\Status403Variant3Response',
            404 => '\\SendGridSDK\\Responses\\Errors\\Status404Variant8Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Variant7Response',
            502 => '\\SendGridSDK\\Responses\\Errors\\Status502Response',
            503 => '\\SendGridSDK\\Responses\\Errors\\Status503Response',
            504 => '\\SendGridSDK\\Responses\\Errors\\Status504Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status400Variant14Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status401Variant3Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status403Variant3Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status404Variant8Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Variant7Response',
                'schemaNullable' => false,
            ],
            502 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status502Response',
                'schemaNullable' => false,
            ],
            503 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status503Response',
                'schemaNullable' => false,
            ],
            504 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status504Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\AccountProvisioning\\StateRead',
    ];

    /**
     * Get an account's state
     *
     * Retrieve the state of the specified account.
     */
    public function get(string $accountID): \SendGridSDK\DTOs\AccountProvisioning\StateRead
    {
        /** @var \SendGridSDK\DTOs\AccountProvisioning\StateRead $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['accountID' => $accountID]);
        return $result;
    }

    private const array PUT = [
        'method' => 'PUT',
        'path' => '/v3/partners/accounts/{accountID}/state',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            204,
        ],
        'errors' => [
            400 => '\\SendGridSDK\\Responses\\Errors\\Status400Variant14Response',
            401 => '\\SendGridSDK\\Responses\\Errors\\Status401Variant3Response',
            403 => '\\SendGridSDK\\Responses\\Errors\\Status403Variant3Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Variant7Response',
            502 => '\\SendGridSDK\\Responses\\Errors\\Status502Response',
            503 => '\\SendGridSDK\\Responses\\Errors\\Status503Response',
            504 => '\\SendGridSDK\\Responses\\Errors\\Status504Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status400Variant14Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status401Variant3Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status403Variant3Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Variant7Response',
                'schemaNullable' => false,
            ],
            502 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status502Response',
                'schemaNullable' => false,
            ],
            503 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status503Response',
                'schemaNullable' => false,
            ],
            504 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status504Response',
                'schemaNullable' => false,
            ],
        ],
        'requestBody' => [
            'type' => '\\SendGridSDK\\DTOs\\AccountProvisioning\\StateWrite',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update an account's state
     *
     * Update the state of the specified account.
     */
    public function put(string $accountID, \SendGridSDK\DTOs\AccountProvisioning\StateWrite $payload): void
    {
        $this->executeBody(self::operation(self::PUT), $payload, path: ['accountID' => $accountID]);
        return;
    }
}
