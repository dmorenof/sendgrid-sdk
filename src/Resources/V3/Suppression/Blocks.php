<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Suppression;

final class Blocks extends \SendGridSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/v3/suppression/blocks',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            204,
        ],
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Suppression\\Blocks\\Delete',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Delete blocks
     *
     * **This endpoint allows you to delete all email addresses on your blocks list.**
     *
     * There are two options for deleting blocked emails:
     *
     * 1. You can delete all blocked emails by setting `delete_all` to `true` in the request body.
     * 2. You can delete a selection of blocked emails by specifying the email addresses in the `emails` array of the request body.
     */
    public function delete(?\SendGridSDK\DeleteParams\V3\Suppression\Blocks $params = null): void
    {
        $this->executeArguments(self::operation(self::DELETE), parameters: $params);
        return;
    }

    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/suppression/blocks',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Collections\\V3\\Suppression\\Blocks\\Get\\SuppressionBlocksCollection',
    ];

    /**
     * Retrieve all blocks
     *
     * **This endpoint allows you to retrieve a paginated list of all email addresses that are currently on your blocks list.**
     *
     * You can use the `limit` query parameter to set the page size. If your list contains more items than the page size permits, you can make multiple requests. Use the `offset` query parameter to control the position in the list from which to start retrieving additional items.
     */
    public function get(?\SendGridSDK\GetParams\V3\Suppression\Blocks $params = null): \SendGridSDK\Collections\V3\Suppression\Blocks\Get\SuppressionBlocksCollection
    {
        /** @var \SendGridSDK\Collections\V3\Suppression\Blocks\Get\SuppressionBlocksCollection $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array DELETE_BY_EMAIL = [
        'method' => 'DELETE',
        'path' => '/v3/suppression/blocks/{email}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            204,
        ],
    ];

    /**
     * Delete a specific block
     *
     * **This endpoint allows you to delete a specific email address from your blocks list.**
     */
    public function deleteByEmail(string $email, ?\SendGridSDK\DeleteParams\V3\Suppression\Blocks\ByEmail $params = null): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_EMAIL), path: ['email' => $email], parameters: $params);
        return;
    }

    private const array GET_BY_EMAIL = [
        'method' => 'GET',
        'path' => '/v3/suppression/blocks/{email}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Collections\\V3\\Suppression\\Blocks\\ByEmail\\Get\\BlocksByEmailCollection',
    ];

    /**
     * Retrieve a specific block
     *
     * **This endpoint allows you to retrieve a specific email address from your blocks list.**
     */
    public function getByEmail(string $email, ?\SendGridSDK\GetParams\V3\Suppression\Blocks\ByEmail $params = null): \SendGridSDK\Collections\V3\Suppression\Blocks\ByEmail\Get\BlocksByEmailCollection
    {
        /** @var \SendGridSDK\Collections\V3\Suppression\Blocks\ByEmail\Get\BlocksByEmailCollection $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_EMAIL), path: ['email' => $email], parameters: $params);
        return $result;
    }
}
