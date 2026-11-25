<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Partners\Accounts\ByAccountID;

final class Ips extends \SendGridSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/v3/partners/accounts/{accountID}/ips',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            204,
        ],
        'errors' => [
            400 => '\\SendGridSDK\\Responses\\Errors\\Status400Variant15Response',
            401 => '\\SendGridSDK\\Responses\\Errors\\Status401Variant4Response',
            403 => '\\SendGridSDK\\Responses\\Errors\\Status403Variant4Response',
            404 => '\\SendGridSDK\\Responses\\Errors\\Status404Variant9Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Variant8Response',
            502 => '\\SendGridSDK\\Responses\\Errors\\Status502Variant2Response',
            503 => '\\SendGridSDK\\Responses\\Errors\\Status503Variant2Response',
            504 => '\\SendGridSDK\\Responses\\Errors\\Status504Variant2Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status400Variant15Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status401Variant4Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status403Variant4Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status404Variant9Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Variant8Response',
                'schemaNullable' => false,
            ],
            502 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status502Variant2Response',
                'schemaNullable' => false,
            ],
            503 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status503Variant2Response',
                'schemaNullable' => false,
            ],
            504 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status504Variant2Response',
                'schemaNullable' => false,
            ],
        ],
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Partners\\Accounts\\ByAccountID\\Ips\\Delete',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Remove Account IPs
     *
     * Removes IP(s) from the specified account.
     */
    public function delete(string $accountID, \SendGridSDK\Requests\V3\Partners\Accounts\ByAccountID\Ips\Delete $payload): void
    {
        $this->executeBody(self::operation(self::DELETE), $payload, path: ['accountID' => $accountID]);
        return;
    }

    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/partners/accounts/{accountID}/ips',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\Responses\\Errors\\Status400Variant15Response',
            401 => '\\SendGridSDK\\Responses\\Errors\\Status401Variant4Response',
            403 => '\\SendGridSDK\\Responses\\Errors\\Status403Variant4Response',
            404 => '\\SendGridSDK\\Responses\\Errors\\Status404Variant9Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Variant8Response',
            502 => '\\SendGridSDK\\Responses\\Errors\\Status502Variant2Response',
            503 => '\\SendGridSDK\\Responses\\Errors\\Status503Variant2Response',
            504 => '\\SendGridSDK\\Responses\\Errors\\Status504Variant2Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status400Variant15Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status401Variant4Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status403Variant4Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status404Variant9Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Variant8Response',
                'schemaNullable' => false,
            ],
            502 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status502Variant2Response',
                'schemaNullable' => false,
            ],
            503 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status503Variant2Response',
                'schemaNullable' => false,
            ],
            504 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status504Variant2Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Partners\\Accounts\\ByAccountID\\Ips\\Get',
    ];

    /**
     * List Account IPs
     *
     * Retrieves a paginated list of IPs associated with the specified account, ordered by most recently added IP.
     */
    public function get(string $accountID, ?\SendGridSDK\GetParams\V3\Partners\Accounts\ByAccountID\Ips $params = null): \SendGridSDK\Responses\V3\Partners\Accounts\ByAccountID\Ips\Get
    {
        /** @var \SendGridSDK\Responses\V3\Partners\Accounts\ByAccountID\Ips\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['accountID' => $accountID], parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/partners/accounts/{accountID}/ips',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'errors' => [
            400 => '\\SendGridSDK\\Responses\\Errors\\Status400Variant15Response',
            401 => '\\SendGridSDK\\Responses\\Errors\\Status401Variant4Response',
            403 => '\\SendGridSDK\\Responses\\Errors\\Status403Variant4Response',
            404 => '\\SendGridSDK\\Responses\\Errors\\Status404Variant9Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Variant8Response',
            502 => '\\SendGridSDK\\Responses\\Errors\\Status502Variant2Response',
            503 => '\\SendGridSDK\\Responses\\Errors\\Status503Variant2Response',
            504 => '\\SendGridSDK\\Responses\\Errors\\Status504Variant2Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status400Variant15Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status401Variant4Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status403Variant4Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status404Variant9Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Variant8Response',
                'schemaNullable' => false,
            ],
            502 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status502Variant2Response',
                'schemaNullable' => false,
            ],
            503 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status503Variant2Response',
                'schemaNullable' => false,
            ],
            504 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status504Variant2Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Partners\\Accounts\\ByAccountID\\Ips\\Post',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Partners\\Accounts\\ByAccountID\\Ips\\Post',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Add Account IPs
     *
     * Adds IP(s) to the specified account.
     */
    public function post(string $accountID, \SendGridSDK\Requests\V3\Partners\Accounts\ByAccountID\Ips\Post $payload): \SendGridSDK\Responses\V3\Partners\Accounts\ByAccountID\Ips\Post
    {
        /** @var \SendGridSDK\Responses\V3\Partners\Accounts\ByAccountID\Ips\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['accountID' => $accountID]);
        return $result;
    }
}
