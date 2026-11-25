<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Mail;

final class Batch extends \SendGridSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/mail/batch',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\Mail\\Error\\Response',
            401 => '\\SendGridSDK\\DTOs\\Mail\\Error\\Response',
            403 => '\\SendGridSDK\\DTOs\\Mail\\Error\\Response',
            404 => '\\SendGridSDK\\DTOs\\Mail\\Error\\Response',
            405 => '\\SendGridSDK\\DTOs\\Mail\\Error\\Response',
            500 => '\\SendGridSDK\\DTOs\\Mail\\Error\\Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\Mail\\Error\\Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\Mail\\Error\\Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\DTOs\\Mail\\Error\\Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\Mail\\Error\\Response',
                'schemaNullable' => false,
            ],
            405 => [
                'type' => '\\SendGridSDK\\DTOs\\Mail\\Error\\Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\DTOs\\Mail\\Error\\Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Mail\\Batch\\Response',
    ];

    /**
     * Create a batch ID.
     *
     * **This operation allows you to generate a new mail batch ID.**
     *
     *
     * Once a batch ID is created, you can associate it with a mail send by passing
     * it in the request body of the [Mail Send operation](https://docs.sendgrid.com/api-reference/mail-send/mail-send).
     * This makes it possible to group multiple requests to the Mail Send operation
     * by assigning them the same batch ID.
     *
     *
     * A batch ID that's associated with a mail send can be used to access and modify the associated send. For example, you can pause or cancel a send using its batch ID. See the [Scheduled Sends API](https://www.twilio.com/docs/sendgrid/api-reference/cancel-scheduled-sends) for more information about pausing and cancelling a mail send.
     *
     */
    public function post(?\SendGridSDK\PostParams\V3\Mail\Batch $params = null): \SendGridSDK\DTOs\Mail\Batch\Response
    {
        /** @var \SendGridSDK\DTOs\Mail\Batch\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

    private const array GET_BY_BATCH_ID = [
        'method' => 'GET',
        'path' => '/v3/mail/batch/{batch_id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\Mail\\Error\\Response',
            401 => '\\SendGridSDK\\DTOs\\Mail\\Error\\Response',
            403 => '\\SendGridSDK\\DTOs\\Mail\\Error\\Response',
            405 => '\\SendGridSDK\\DTOs\\Mail\\Error\\Response',
            500 => '\\SendGridSDK\\DTOs\\Mail\\Error\\Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\Mail\\Error\\Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\Mail\\Error\\Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\DTOs\\Mail\\Error\\Response',
                'schemaNullable' => false,
            ],
            405 => [
                'type' => '\\SendGridSDK\\DTOs\\Mail\\Error\\Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\DTOs\\Mail\\Error\\Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Mail\\Batch\\Response',
    ];

    /**
     * Validate a batch ID.
     *
     * **This operation allows you to validate a mail batch ID.**
     *
     * If you provide a valid batch ID, this operation will return a `200` status code and the batch ID itself.
     * If you provide an invalid batch ID, you will receive a `400` level status code and an error message.
     * A batch ID does not need to be assigned to a send to be considered valid. A successful response means only that the batch ID has been created, but it does not indicate that the ID has been assigned to a send.
     */
    public function getByBatchId(string $batch_id, ?\SendGridSDK\GetParams\V3\Mail\Batch\ByBatchId $params = null): \SendGridSDK\DTOs\Mail\Batch\Response
    {
        /** @var \SendGridSDK\DTOs\Mail\Batch\Response $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_BATCH_ID), path: ['batch_id' => $batch_id], parameters: $params);
        return $result;
    }
}
