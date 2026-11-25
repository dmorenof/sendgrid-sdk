<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Marketing;

final class Lists extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/marketing/lists',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Marketing\\Lists\\Get',
    ];

    /**
     * Get All Lists
     *
     * **This endpoint returns an array of all of your contact lists.**
     */
    public function get(?\SendGridSDK\GetParams\V3\Marketing\Lists $params = null): \SendGridSDK\Responses\V3\Marketing\Lists\Get
    {
        /** @var \SendGridSDK\Responses\V3\Marketing\Lists\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/marketing/lists',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'errors' => [
            400 => '\\SendGridSDK\\Responses\\Errors\\Status400Variant11Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status400Variant11Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\ListDTO',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Marketing\\Lists\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Create List
     *
     * **This endpoint creates a new contacts list.**
     *
     * Once you create a list, you can use the UI to [trigger an automation](https://sendgrid.com/docs/ui/sending-email/getting-started-with-automation/#create-an-automation) every time you add a new contact to the list.
     *
     * A link to the newly created object is in `_metadata`.
     */
    public function post(?\SendGridSDK\Requests\V3\Marketing\Lists\Post $payload = null): \SendGridSDK\DTOs\ListDTO
    {
        /** @var \SendGridSDK\DTOs\ListDTO $result */
        $result = func_num_args() > 0 ? $this->executeBody(self::operation(self::POST), $payload) : $this->executeArguments(self::operation(self::POST));
        return $result;
    }

    private const array DELETE_BY_ID = [
        'method' => 'DELETE',
        'path' => '/v3/marketing/lists/{id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            200,
            204,
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\ListDeleteConflict',
            404 => '\\SendGridSDK\\Responses\\Errors\\V3\\Marketing\\Lists\\ById\\DeleteStatus404Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\ListDeleteConflict',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\V3\\Marketing\\Lists\\ById\\DeleteStatus404Response',
                'schemaNullable' => false,
            ],
        ],
        'responseTypes' => [
            200 => [
                'type' => '\\SendGridSDK\\Responses\\V3\\Marketing\\Lists\\ById\\Delete',
                'schemaNullable' => false,
            ],
            204 => [
                'type' => null,
                'schemaNullable' => false,
            ],
        ],
    ];

    /**
     * Delete a list
     *
     * **This endpoint allows you to deletes a specific list.**
     *
     * Optionally, you can also delete contacts associated to the list. The query parameter, `delete_contacts=true`, will delete the list and start an asynchronous job to delete associated contacts.
     */
    public function deleteById(string $id, ?\SendGridSDK\DeleteParams\V3\Marketing\Lists\ById $params = null): ?\SendGridSDK\Responses\V3\Marketing\Lists\ById\Delete
    {
        /** @var ?\SendGridSDK\Responses\V3\Marketing\Lists\ById\Delete $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_ID), path: ['id' => $id], parameters: $params);
        return $result;
    }

    private const array GET_BY_ID = [
        'method' => 'GET',
        'path' => '/v3/marketing/lists/{id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            404 => null,
        ],
        'errorResponses' => [
            404 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\Status400Variant11\\Status400Variant11ErrorsCollection',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Marketing\\Lists\\ById\\Get',
    ];

    /**
     * Get a List by ID
     *
     * **This endpoint returns data about a specific list.**
     * Setting the optional parameter `contact_sample=true` returns the `contact_sample` in the response body. Up to 50 of the most recent contacts uploaded or attached to a list will be returned.
     * The full contact count is also returned.
     */
    public function getById(string $id, ?\SendGridSDK\GetParams\V3\Marketing\Lists\ById $params = null): \SendGridSDK\Responses\V3\Marketing\Lists\ById\Get
    {
        /** @var \SendGridSDK\Responses\V3\Marketing\Lists\ById\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_ID), path: ['id' => $id], parameters: $params);
        return $result;
    }

    private const array PATCH_BY_ID = [
        'method' => 'PATCH',
        'path' => '/v3/marketing/lists/{id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\Responses\\Errors\\Status400Variant11Response',
            404 => '\\SendGridSDK\\Responses\\Errors\\Status404Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status400Variant11Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status404Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\ListDTO',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Marketing\\Lists\\ById\\Patch',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update List
     *
     * **This endpoint updates the name of a list.**
     */
    public function patchById(string $id, ?\SendGridSDK\Requests\V3\Marketing\Lists\ById\Patch $payload = null): \SendGridSDK\DTOs\ListDTO
    {
        /** @var \SendGridSDK\DTOs\ListDTO $result */
        $result = func_num_args() > 1 ? $this->executeBody(self::operation(self::PATCH_BY_ID), $payload, path: ['id' => $id]) : $this->executeArguments(self::operation(self::PATCH_BY_ID), path: ['id' => $id]);
        return $result;
    }
}
