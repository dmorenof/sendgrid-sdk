<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Marketing;

final class Singlesends extends \SendGridSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/v3/marketing/singlesends',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            204,
        ],
        'errors' => [
            404 => '\\SendGridSDK\\Responses\\Errors\\Status404Variant6Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Variant6Response',
        ],
        'errorResponses' => [
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status404Variant6Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Variant6Response',
                'schemaNullable' => false,
            ],
        ],
        'querySerialization' => [
            'ids' => 'csv',
        ],
    ];

    /**
     * Bulk Delete Single Sends
     *
     * **This endpoint allows you to delete multiple Single Sends using an array of Single Sends IDs.**
     *
     * To first retrieve all your Single Sends' IDs, you can make a GET request to the `/marketing/singlensends` endpoint.
     *
     * Please note that a DELETE request is permanent, and your Single Sends will not be recoverable after deletion.
     */
    public function delete(?\SendGridSDK\DeleteParams\V3\Marketing\Singlesends $params = null): void
    {
        $this->executeArguments(self::operation(self::DELETE), parameters: $params);
        return;
    }

    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/marketing/singlesends',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Variant6Response',
        ],
        'errorResponses' => [
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Variant6Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Marketing\\Singlesends\\Get',
    ];

    /**
     * Get All Single Sends
     *
     * **This endpoint allows you to retrieve all your Single Sends.**
     *
     * Returns all of your Single Sends with condensed details about each, including the Single Sends' IDs. For more details about an individual Single Send, pass the Single Send's ID to the `/marketing/singlesends/{id}` endpoint.
     */
    public function get(?\SendGridSDK\GetParams\V3\Marketing\Singlesends $params = null): \SendGridSDK\Responses\V3\Marketing\Singlesends\Get
    {
        /** @var \SendGridSDK\Responses\V3\Marketing\Singlesends\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/marketing/singlesends',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'errors' => [
            400 => '\\SendGridSDK\\Responses\\Errors\\Status400Variant12Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Variant6Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status400Variant12Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Variant6Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Singlesend\\Response',
        'requestBody' => [
            'type' => '\\SendGridSDK\\DTOs\\Singlesend\\Request',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Create Single Send
     *
     * **This endpoint allows you to create a new Single Send.**
     *
     * Please note that if you are migrating from the previous version of Single Sends, you no longer need to pass a template ID with your request to this endpoint. Instead, you will pass all template data in the `email_config` object.
     *
     * This endpoint will create a draft of the Single Send but will not send it or schedule it to be sent. Any `send_at` property value set with this endpoint will prepopulate the Single Send's send date. However, the Single Send will remain an unscheduled draft until it's updated with the [**Schedule Single Send**](https://docs.sendgrid.com/api-reference/single-sends/schedule-single-send) endpoint or SendGrid application UI.
     */
    public function post(?\SendGridSDK\DTOs\Singlesend\Request $payload = null): \SendGridSDK\DTOs\Singlesend\Response
    {
        /** @var \SendGridSDK\DTOs\Singlesend\Response $result */
        $result = func_num_args() > 0 ? $this->executeBody(self::operation(self::POST), $payload) : $this->executeArguments(self::operation(self::POST));
        return $result;
    }

    private const array DELETE_BY_ID = [
        'method' => 'DELETE',
        'path' => '/v3/marketing/singlesends/{id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            204,
        ],
        'errors' => [
            404 => '\\SendGridSDK\\Responses\\Errors\\Status404Variant6Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Variant6Response',
        ],
        'errorResponses' => [
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status404Variant6Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Variant6Response',
                'schemaNullable' => false,
            ],
        ],
    ];

    /**
     * Delete Single Send by ID
     *
     * **This endpoint allows you to delete one Single Send using a Single Send ID.**
     *
     * To first retrieve all your Single Sends' IDs, you can make a GET request to the `/marketing/singlensends` endpoint.
     *
     * Please note that a `DELETE` request is permanent, and your Single Send will not be recoverable after deletion.
     */
    public function deleteById(string $id): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_ID), path: ['id' => $id]);
        return;
    }

    private const array GET_BY_ID = [
        'method' => 'GET',
        'path' => '/v3/marketing/singlesends/{id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            404 => '\\SendGridSDK\\Responses\\Errors\\Status404Variant6Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Variant6Response',
        ],
        'errorResponses' => [
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status404Variant6Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Variant6Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Singlesend\\Response',
    ];

    /**
     * Get Single Send by ID
     *
     * **This endpoint allows you to retrieve details about one Single Send using a Single Send ID.**
     *
     * You can retrieve all of your Single Sends by making a GET request to the `/marketing/singlesends` endpoint.
     */
    public function getById(string $id): \SendGridSDK\DTOs\Singlesend\Response
    {
        /** @var \SendGridSDK\DTOs\Singlesend\Response $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_ID), path: ['id' => $id]);
        return $result;
    }

    private const array PATCH_BY_ID = [
        'method' => 'PATCH',
        'path' => '/v3/marketing/singlesends/{id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            202,
        ],
        'errors' => [
            400 => '\\SendGridSDK\\Responses\\Errors\\Status400Variant12Response',
            404 => '\\SendGridSDK\\Responses\\Errors\\Status404Variant6Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Variant6Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status400Variant12Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status404Variant6Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Variant6Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Singlesend\\Response',
        'requestBody' => [
            'type' => '\\SendGridSDK\\DTOs\\Singlesend\\Request',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update Single Send
     *
     * **This endpoint allows you to update a Single Send using a Single Send ID.**
     *
     * You only need to pass the properties you want to update. Any blank or missing properties will remain unaltered.
     *
     * This endpoint will update a draft of the Single Send but will not send it or schedule it to be sent. Any `send_at` property value set with this endpoint will prepopulate the Single Send's send date. However, the Single Send will remain an unscheduled draft until it's updated with the [**Schedule Single Send**](https://docs.sendgrid.com/api-reference/single-sends/schedule-single-send) endpoint or SendGrid application UI.
     */
    public function patchById(string $id, ?\SendGridSDK\DTOs\Singlesend\Request $payload = null): \SendGridSDK\DTOs\Singlesend\Response
    {
        /** @var \SendGridSDK\DTOs\Singlesend\Response $result */
        $result = func_num_args() > 1 ? $this->executeBody(self::operation(self::PATCH_BY_ID), $payload, path: ['id' => $id]) : $this->executeArguments(self::operation(self::PATCH_BY_ID), path: ['id' => $id]);
        return $result;
    }

    private const array POST_BY_ID = [
        'method' => 'POST',
        'path' => '/v3/marketing/singlesends/{id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'errors' => [
            404 => '\\SendGridSDK\\Responses\\Errors\\Status404Variant6Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Variant6Response',
        ],
        'errorResponses' => [
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status404Variant6Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Variant6Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Singlesend\\Response',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Marketing\\Singlesends\\ById\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Duplicate Single Send
     *
     * **This endpoint allows you to duplicate an existing Single Send using its Single Send ID.**
     *
     * Duplicating a Single Send is useful when you want to create a Single Send but don't want to start from scratch. Once duplicated, you can update or edit the Single Send by making a PATCH request to the `/marketing/singlesends/{id}` endpoint.
     *
     * If you leave the `name` field blank, your duplicate will be assigned the name of the Single Send it was copied from with the text “Copy of ” prepended to it. The `name` field length is limited to 100 characters, so the end of the new Single Send name, including “Copy of ”, will be trimmed if the name exceeds this limit.
     */
    public function postById(string $id, ?\SendGridSDK\Requests\V3\Marketing\Singlesends\ById\Post $payload = null): \SendGridSDK\DTOs\Singlesend\Response
    {
        /** @var \SendGridSDK\DTOs\Singlesend\Response $result */
        $result = func_num_args() > 1 ? $this->executeBody(self::operation(self::POST_BY_ID), $payload, path: ['id' => $id]) : $this->executeArguments(self::operation(self::POST_BY_ID), path: ['id' => $id]);
        return $result;
    }
}
