<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Partners\Accounts\ByAccountID;

final class Offerings extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/partners/accounts/{accountID}/offerings',
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
        'responseType' => '\\SendGridSDK\\DTOs\\AccountProvisioning\\AssignedOfferingList',
    ];

    /**
     * Get account offerings
     *
     * Retrieves offering information about the specified account.
     */
    public function get(string $accountID): \SendGridSDK\DTOs\AccountProvisioning\AssignedOfferingList
    {
        /** @var \SendGridSDK\DTOs\AccountProvisioning\AssignedOfferingList $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['accountID' => $accountID]);
        return $result;
    }

    private const array PUT = [
        'method' => 'PUT',
        'path' => '/v3/partners/accounts/{accountID}/offerings',
        'security' => [
            [
                'BearerAuth' => [],
            ],
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
        'responseType' => '\\SendGridSDK\\DTOs\\AccountProvisioning\\OfferingList',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Partners\\Accounts\\ByAccountID\\Offerings\\Put',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update account offerings
     *
     * Changes a package offering for the specified account. Please note that an account can have only one package offering. Also associates one or more add-on offerings such as Marketing Campaigns, Dedicated IP Addresses, and Expert Services to the specified account.
     */
    public function put(string $accountID, \SendGridSDK\Requests\V3\Partners\Accounts\ByAccountID\Offerings\Put $payload): \SendGridSDK\DTOs\AccountProvisioning\OfferingList
    {
        /** @var \SendGridSDK\DTOs\AccountProvisioning\OfferingList $result */
        $result = $this->executeBody(self::operation(self::PUT), $payload, path: ['accountID' => $accountID]);
        return $result;
    }
}
