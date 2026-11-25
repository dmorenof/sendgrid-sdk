<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Marketing;

final class Senders extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/marketing/senders',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            404 => '\\SendGridSDK\\DTOs\\Mc\\SendersError\\Response',
        ],
        'errorResponses' => [
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\Mc\\SendersError\\Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Marketing\\Senders\\Get',
    ];

    /**
     * Get a list of all Senders
     *
     * **This endpoint allows you to get a list of all your Senders.**
     */
    public function get(?\SendGridSDK\GetParams\V3\Marketing\Senders $params = null): \SendGridSDK\Responses\V3\Marketing\Senders\Get
    {
        /** @var \SendGridSDK\Responses\V3\Marketing\Senders\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/marketing/senders',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'errors' => [
            401 => '\\SendGridSDK\\DTOs\\Mc\\SendersError\\Response',
            403 => '\\SendGridSDK\\DTOs\\Mc\\SendersError\\Response',
            404 => '\\SendGridSDK\\DTOs\\Mc\\SendersError\\Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\Mc\\SendersError\\Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\DTOs\\Mc\\SendersError\\Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\Mc\\SendersError\\Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Sender',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Marketing\\Senders\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Create a Sender
     *
     * **This endpoint allows you to create a new Sender.**
     *
     * *You may create up to 100 unique Senders.*
     *
     * Senders are required to be verified before use. If your domain has been authenticated, a new Sender will auto verify on creation. Otherwise an email will be sent to the `from.email`.
     */
    public function post(?\SendGridSDK\PostParams\V3\Marketing\Senders $params = null): \SendGridSDK\DTOs\Sender
    {
        /** @var \SendGridSDK\DTOs\Sender $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

    private const array DELETE_BY_ID = [
        'method' => 'DELETE',
        'path' => '/v3/marketing/senders/{id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            204,
        ],
        'errors' => [
            403 => '\\SendGridSDK\\DTOs\\Mc\\SendersError\\Response',
            404 => '\\SendGridSDK\\DTOs\\Mc\\SendersError\\Response',
        ],
        'errorResponses' => [
            403 => [
                'type' => '\\SendGridSDK\\DTOs\\Mc\\SendersError\\Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\Mc\\SendersError\\Response',
                'schemaNullable' => false,
            ],
        ],
    ];

    /**
     * Delete a Sender
     *
     * **This endpoint allows you to delete an existing Sender.**
     */
    public function deleteById(int $id, ?\SendGridSDK\DeleteParams\V3\Marketing\Senders\ById $params = null): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_ID), path: ['id' => $id], parameters: $params);
        return;
    }

    private const array GET_BY_ID = [
        'method' => 'GET',
        'path' => '/v3/marketing/senders/{id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            404 => '\\SendGridSDK\\DTOs\\Mc\\SendersError\\Response',
        ],
        'errorResponses' => [
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\Mc\\SendersError\\Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Sender',
    ];

    /**
     * Get a specific Sender
     *
     * **This endpoint allows you to get the details for a specific Sender by `id`.**
     */
    public function getById(int $id, ?\SendGridSDK\GetParams\V3\Marketing\Senders\ById $params = null): \SendGridSDK\DTOs\Sender
    {
        /** @var \SendGridSDK\DTOs\Sender $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_ID), path: ['id' => $id], parameters: $params);
        return $result;
    }

    private const array PATCH_BY_ID = [
        'method' => 'PATCH',
        'path' => '/v3/marketing/senders/{id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\Mc\\SendersError\\Response',
            403 => '\\SendGridSDK\\DTOs\\Mc\\SendersError\\Response',
            404 => '\\SendGridSDK\\DTOs\\Mc\\SendersError\\Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\Mc\\SendersError\\Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\DTOs\\Mc\\SendersError\\Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\Mc\\SendersError\\Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Sender',
        'requestBody' => [
            'type' => '\\SendGridSDK\\DTOs\\Sender\\Request',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update a Sender
     *
     * **This endpoint allows you to update an existing Sender.**
     *
     * Updates to `from.email` require re-verification. If your domain has been authenticated, a new Sender will auto verify on creation. Otherwise, an email will be sent to the `from.email`.
     *
     * Partial updates are allowed, but fields that are marked as "required" in the `POST` (create) endpoint must not be nil if that field is included in the `PATCH` request.
     */
    public function patchById(int $id, ?\SendGridSDK\PatchParams\V3\Marketing\Senders\ById $params = null): \SendGridSDK\DTOs\Sender
    {
        /** @var \SendGridSDK\DTOs\Sender $result */
        $result = $this->executeArguments(self::operation(self::PATCH_BY_ID), path: ['id' => $id], parameters: $params);
        return $result;
    }
}
