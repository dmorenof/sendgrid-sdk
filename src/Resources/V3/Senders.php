<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3;

final class Senders extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/senders',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Senders\\Get',
    ];

    /**
     * Get all Sender Identities
     *
     * **This endpoint allows you to retrieve a list of all sender identities that have been created for your account.**
     */
    public function get(?\SendGridSDK\GetParams\V3\Senders $params = null): \SendGridSDK\Responses\V3\Senders\Get
    {
        /** @var \SendGridSDK\Responses\V3\Senders\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/senders',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'errors' => [
            400 => '\\SendGridSDK\\Responses\\Errors\\Status400Variant8Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status400Variant8Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Sender\\Id',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Senders\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Create a Sender Identity
     *
     * **This endpoint allows you to create a new sender identity.**
     *
     * You may create up to 100 unique sender identities.
     */
    public function post(?\SendGridSDK\PostParams\V3\Senders $params = null): \SendGridSDK\DTOs\Sender\Id
    {
        /** @var \SendGridSDK\DTOs\Sender\Id $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

    private const array DELETE_BY_SENDER_ID = [
        'method' => 'DELETE',
        'path' => '/v3/senders/{sender_id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            204,
        ],
        'errors' => [
            403 => '\\SendGridSDK\\Responses\\Errors\\Status403Variant5Response',
            404 => '\\SendGridSDK\\Responses\\Errors\\Status404Variant7Response',
        ],
        'errorResponses' => [
            403 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status403Variant5Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status404Variant7Response',
                'schemaNullable' => false,
            ],
        ],
    ];

    /**
     * Delete a Sender Identity
     *
     * **This endpoint allows you to delete one of your sender identities.**
     */
    public function deleteBySenderId(int $sender_id, ?\SendGridSDK\DeleteParams\V3\Senders\BySenderId $params = null): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_SENDER_ID), path: ['sender_id' => $sender_id], parameters: $params);
        return;
    }

    private const array GET_BY_SENDER_ID = [
        'method' => 'GET',
        'path' => '/v3/senders/{sender_id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            404 => '\\SendGridSDK\\Responses\\Errors\\Status404Variant7Response',
        ],
        'errorResponses' => [
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status404Variant7Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Sender\\Id',
    ];

    /**
     * View a Sender Identity
     *
     * **This endpoint allows you to retrieve a specific sender identity.**
     */
    public function getBySenderId(int $sender_id, ?\SendGridSDK\GetParams\V3\Senders\BySenderId $params = null): \SendGridSDK\DTOs\Sender\Id
    {
        /** @var \SendGridSDK\DTOs\Sender\Id $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_SENDER_ID), path: ['sender_id' => $sender_id], parameters: $params);
        return $result;
    }

    private const array PATCH_BY_SENDER_ID = [
        'method' => 'PATCH',
        'path' => '/v3/senders/{sender_id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\Responses\\Errors\\Status400Variant8Response',
            403 => '\\SendGridSDK\\Responses\\Errors\\Status403Variant5Response',
            404 => '\\SendGridSDK\\Responses\\Errors\\Status404Variant7Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status400Variant8Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status403Variant5Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status404Variant7Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Sender\\Id',
        'requestBody' => [
            'type' => '\\SendGridSDK\\DTOs\\Sender\\Id\\Request',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update a Sender Identity
     *
     * **This endpoint allows you to update a sender identity.**
     *
     * Updates to `from.email` require re-verification.
     *
     * Partial updates are allowed, but fields that are marked as "required" in the POST (create) endpoint must not be nil if that field is included in the PATCH request.
     */
    public function patchBySenderId(int $sender_id, ?\SendGridSDK\PatchParams\V3\Senders\BySenderId $params = null): \SendGridSDK\DTOs\Sender\Id
    {
        /** @var \SendGridSDK\DTOs\Sender\Id $result */
        $result = $this->executeArguments(self::operation(self::PATCH_BY_SENDER_ID), path: ['sender_id' => $sender_id], parameters: $params);
        return $result;
    }
}
