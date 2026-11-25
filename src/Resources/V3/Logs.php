<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3;

final class Logs extends \SendGridSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/logs',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            200,
            'default',
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\Logs\\Error\\Response',
            403 => '\\SendGridSDK\\DTOs\\Logs\\Error\\Response',
            429 => '\\SendGridSDK\\DTOs\\Logs\\Error\\Response',
            'default' => '\\SendGridSDK\\DTOs\\Logs\\Error\\Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\Logs\\Error\\Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\DTOs\\Logs\\Error\\Response',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\SendGridSDK\\DTOs\\Logs\\Error\\Response',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\SendGridSDK\\DTOs\\Logs\\Error\\Response',
                'schemaNullable' => false,
            ],
        ],
        'responseTypes' => [
            200 => [
                'type' => '\\SendGridSDK\\DTOs\\Email\\LogsGetMessagesByFilter\\Response',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\SendGridSDK\\DTOs\\Logs\\Error\\Response',
                'schemaNullable' => false,
            ],
        ],
        'requestBody' => [
            'type' => '\\SendGridSDK\\DTOs\\Email\\LogsGetMessagesByFilter\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Search all messages using the provided query filters.
     *
     * List recent messages within Email Logs, or search for messages using a filter.
     *
     */
    public function post(\SendGridSDK\DTOs\Email\LogsGetMessagesByFilter\Request $payload): \SendGridSDK\DTOs\Email\LogsGetMessagesByFilter\Response|\SendGridSDK\DTOs\Logs\Error\Response|null
    {
        /** @var \SendGridSDK\DTOs\Email\LogsGetMessagesByFilter\Response|\SendGridSDK\DTOs\Logs\Error\Response|null $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

    private const array GET_BY_SG_MESSAGE_ID = [
        'method' => 'GET',
        'path' => '/v3/logs/{sg_message_id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            200,
            'default',
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\Logs\\Error\\Response',
            403 => '\\SendGridSDK\\DTOs\\Logs\\Error\\Response',
            404 => '\\SendGridSDK\\DTOs\\Logs\\Error\\Response',
            429 => '\\SendGridSDK\\DTOs\\Logs\\Error\\Response',
            'default' => '\\SendGridSDK\\DTOs\\Logs\\Error\\Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\Logs\\Error\\Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\DTOs\\Logs\\Error\\Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\Logs\\Error\\Response',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\SendGridSDK\\DTOs\\Logs\\Error\\Response',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\SendGridSDK\\DTOs\\Logs\\Error\\Response',
                'schemaNullable' => false,
            ],
        ],
        'responseTypes' => [
            200 => [
                'type' => '\\SendGridSDK\\DTOs\\Email\\LogsGetMessageById\\Response',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\SendGridSDK\\DTOs\\Logs\\Error\\Response',
                'schemaNullable' => false,
            ],
        ],
    ];

    /**
     * Get all details for the specified message ID.
     *
     * Get all of the details about the specified message.
     */
    public function getBySgMessageId(string $sg_message_id, ?\SendGridSDK\GetParams\V3\Logs\BySgMessageId $params = null): \SendGridSDK\DTOs\Email\LogsGetMessageById\Response|\SendGridSDK\DTOs\Logs\Error\Response|null
    {
        /** @var \SendGridSDK\DTOs\Email\LogsGetMessageById\Response|\SendGridSDK\DTOs\Logs\Error\Response|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_SG_MESSAGE_ID), path: ['sg_message_id' => $sg_message_id], parameters: $params);
        return $result;
    }
}
