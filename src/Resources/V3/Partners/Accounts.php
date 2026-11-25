<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Partners;

final class Accounts extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/partners/accounts',
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
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Partners\\Accounts\\Get',
    ];

    /**
     * Get all accounts
     *
     * Retrieves all accounts under the organization.
     */
    public function get(?\SendGridSDK\GetParams\V3\Partners\Accounts $params = null): \SendGridSDK\Responses\V3\Partners\Accounts\Get
    {
        /** @var \SendGridSDK\Responses\V3\Partners\Accounts\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/partners/accounts',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            201,
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
        'responseType' => '\\SendGridSDK\\DTOs\\AccountProvisioning\\AccountId',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Partners\\Accounts\\Post',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create an account
     *
     * Creates a new account, with specified offering, under the organization.
     */
    public function post(\SendGridSDK\PostParams\V3\Partners\Accounts $params): \SendGridSDK\DTOs\AccountProvisioning\AccountId
    {
        /** @var \SendGridSDK\DTOs\AccountProvisioning\AccountId $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

    private const array DELETE_BY_ACCOUNT_ID = [
        'method' => 'DELETE',
        'path' => '/v3/partners/accounts/{accountID}',
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
    ];

    /**
     * Delete an account
     *
     * Delete a specific account under your organization by account ID. Note that this is an **irreversible** action that does the following:
     *
     *  - Revokes API Keys and SSO so that the account user cannot log in or access SendGrid data.
     *  - Removes all offerings and configured SendGrid resources such as dedicated IPs.
     *  - Cancels billing effective immediately.
     */
    public function deleteByAccountID(string $accountID): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_ACCOUNT_ID), path: ['accountID' => $accountID]);
        return;
    }
}
