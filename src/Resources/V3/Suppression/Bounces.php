<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Suppression;

final class Bounces extends \SendGridSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/v3/suppression/bounces',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            204,
        ],
        'errors' => [
            401 => '\\SendGridSDK\\DTOs\\SuppressionsErrorResponse',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\SuppressionsErrorResponse',
                'schemaNullable' => false,
            ],
        ],
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Suppression\\Bounces\\Delete',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Delete bounces
     *
     * **This endpoint allows you to delete all emails on your bounces list.**
     *
     * There are two options for deleting bounced emails:
     *
     * 1. You can delete all bounced emails by setting `delete_all` to `true` in the request body.
     * 2. You can delete a selection of bounced emails by specifying the email addresses in the `emails` array of the request body.
     *
     * **WARNING:** You can not have both `emails` and `delete_all` set.
     */
    public function delete(?\SendGridSDK\DeleteParams\V3\Suppression\Bounces $params = null): void
    {
        $this->executeArguments(self::operation(self::DELETE), parameters: $params);
        return;
    }

    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/suppression/bounces',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            401 => '\\SendGridSDK\\DTOs\\SuppressionsErrorResponse',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\SuppressionsErrorResponse',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Collections\\V3\\Suppression\\Bounces\\Get\\SuppressionBouncesCollection',
    ];

    /**
     * Retrieve all bounces
     *
     * **This endpoint allows you to retrieve a paginated list of all your bounces.**
     *
     * You can use the `limit` query parameter to set the page size. If your list contains more items than the page size permits, you can make multiple requests. Use the `offset` query parameter to control the position in the list from which to start retrieving additional items.
     */
    public function get(\SendGridSDK\GetParams\V3\Suppression\Bounces $params): \SendGridSDK\Collections\V3\Suppression\Bounces\Get\SuppressionBouncesCollection
    {
        /** @var \SendGridSDK\Collections\V3\Suppression\Bounces\Get\SuppressionBouncesCollection $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array DELETE_BY_EMAIL = [
        'method' => 'DELETE',
        'path' => '/v3/suppression/bounces/{email}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            204,
        ],
        'errors' => [
            401 => '\\SendGridSDK\\DTOs\\SuppressionsErrorResponse',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\SuppressionsErrorResponse',
                'schemaNullable' => false,
            ],
        ],
    ];

    /**
     * Delete a bounce
     *
     * **This endpoint allows you to remove an email address from your bounce list.**
     */
    public function deleteByEmail(string $email, ?\SendGridSDK\DeleteParams\V3\Suppression\Bounces\ByEmail $params = null): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_EMAIL), path: ['email' => $email], parameters: $params);
        return;
    }

    private const array GET_BY_EMAIL = [
        'method' => 'GET',
        'path' => '/v3/suppression/bounces/{email}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Collections\\V3\\Suppression\\Bounces\\Get\\SuppressionBouncesCollection',
    ];

    /**
     * Retrieve a Bounce
     *
     * **This endpoint allows you to retrieve a specific bounce by email address.**
     */
    public function getByEmail(string $email, ?\SendGridSDK\GetParams\V3\Suppression\Bounces\ByEmail $params = null): \SendGridSDK\Collections\V3\Suppression\Bounces\Get\SuppressionBouncesCollection
    {
        /** @var \SendGridSDK\Collections\V3\Suppression\Bounces\Get\SuppressionBouncesCollection $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_EMAIL), path: ['email' => $email], parameters: $params);
        return $result;
    }
}
