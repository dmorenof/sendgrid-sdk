<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\User;

final class ScheduledSends extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/user/scheduled_sends',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\ScheduledSends\\Error\\Response',
            401 => '\\SendGridSDK\\DTOs\\ScheduledSends\\Error\\Response',
            403 => '\\SendGridSDK\\DTOs\\ScheduledSends\\Error\\Response',
            404 => '\\SendGridSDK\\DTOs\\ScheduledSends\\Error\\Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\ScheduledSends\\Error\\Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\ScheduledSends\\Error\\Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\DTOs\\ScheduledSends\\Error\\Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\ScheduledSends\\Error\\Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Collections\\V3\\User\\ScheduledSends\\Get\\UserScheduledSendsCollection',
    ];

    /**
     * Retrieve all scheduled sends
     *
     * **This endpoint allows you to retrieve all cancelled and paused scheduled send information.**
     *
     * This endpoint will return only the scheduled sends that are associated with a `batch_id`. If you have scheduled a send using the `/mail/send` endpoint and the `send_at` field but no `batch_id`, the send will be scheduled for delivery; however, it will not be returned by this endpoint. For this reason, you should assign a `batch_id` to any scheduled send you may need to pause or cancel in the future.
     */
    public function get(?\SendGridSDK\GetParams\V3\User\ScheduledSends $params = null): \SendGridSDK\Collections\V3\User\ScheduledSends\Get\UserScheduledSendsCollection
    {
        /** @var \SendGridSDK\Collections\V3\User\ScheduledSends\Get\UserScheduledSendsCollection $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/user/scheduled_sends',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\ScheduledSends\\Error\\Response',
            401 => '\\SendGridSDK\\DTOs\\ScheduledSends\\Error\\Response',
            403 => '\\SendGridSDK\\DTOs\\ScheduledSends\\Error\\Response',
            404 => '\\SendGridSDK\\DTOs\\ScheduledSends\\Error\\Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\ScheduledSends\\Error\\Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\ScheduledSends\\Error\\Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\DTOs\\ScheduledSends\\Error\\Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\ScheduledSends\\Error\\Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\ScheduledSendStatus',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\User\\ScheduledSends\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Cancel or pause a scheduled send
     *
     * **This endpoint allows you to cancel or pause a scheduled send associated with a `batch_id`.**
     *
     * Passing this endpoint a `batch_id` and status will cancel or pause the scheduled send.
     *
     * Once a scheduled send is set to `pause` or `cancel` you must use the "Update a scheduled send" endpoint to change its status or the "Delete a cancellation or pause from a scheduled send" endpoint to remove the status. Passing a status change to a scheduled send that has already been paused or cancelled will result in a `400` level status code.
     *
     * If the maximum number of cancellations/pauses are added to a send, a `400` level status code will be returned.
     */
    public function post(?\SendGridSDK\PostParams\V3\User\ScheduledSends $params = null): \SendGridSDK\DTOs\ScheduledSendStatus
    {
        /** @var \SendGridSDK\DTOs\ScheduledSendStatus $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

    private const array DELETE_BY_BATCH_ID = [
        'method' => 'DELETE',
        'path' => '/v3/user/scheduled_sends/{batch_id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            204,
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\ScheduledSends\\Error\\Response',
            401 => '\\SendGridSDK\\DTOs\\ScheduledSends\\Error\\Response',
            403 => '\\SendGridSDK\\DTOs\\ScheduledSends\\Error\\Response',
            404 => '\\SendGridSDK\\DTOs\\ScheduledSends\\Error\\Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\ScheduledSends\\Error\\Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\ScheduledSends\\Error\\Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\DTOs\\ScheduledSends\\Error\\Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\ScheduledSends\\Error\\Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
    ];

    /**
     * Delete a cancellation or pause from a scheduled send
     *
     * **This endpoint allows you to delete the cancellation/pause of a scheduled send.**
     *
     * Scheduled sends cancelled less than 10 minutes before the scheduled time are not guaranteed to be cancelled.
     */
    public function deleteByBatchId(string $batch_id, ?\SendGridSDK\DeleteParams\V3\User\ScheduledSends\ByBatchId $params = null): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_BATCH_ID), path: ['batch_id' => $batch_id], parameters: $params);
        return;
    }

    private const array GET_BY_BATCH_ID = [
        'method' => 'GET',
        'path' => '/v3/user/scheduled_sends/{batch_id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\ScheduledSends\\Error\\Response',
            401 => '\\SendGridSDK\\DTOs\\ScheduledSends\\Error\\Response',
            403 => '\\SendGridSDK\\DTOs\\ScheduledSends\\Error\\Response',
            404 => '\\SendGridSDK\\DTOs\\ScheduledSends\\Error\\Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\ScheduledSends\\Error\\Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\ScheduledSends\\Error\\Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\DTOs\\ScheduledSends\\Error\\Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\ScheduledSends\\Error\\Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Collections\\V3\\User\\ScheduledSends\\Get\\UserScheduledSendsCollection',
    ];

    /**
     * Retrieve scheduled send
     *
     * **This endpoint allows you to retrieve the cancel/paused scheduled send information for a specific `batch_id`.**
     */
    public function getByBatchId(string $batch_id, ?\SendGridSDK\GetParams\V3\User\ScheduledSends\ByBatchId $params = null): \SendGridSDK\Collections\V3\User\ScheduledSends\Get\UserScheduledSendsCollection
    {
        /** @var \SendGridSDK\Collections\V3\User\ScheduledSends\Get\UserScheduledSendsCollection $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_BATCH_ID), path: ['batch_id' => $batch_id], parameters: $params);
        return $result;
    }

    private const array PATCH_BY_BATCH_ID = [
        'method' => 'PATCH',
        'path' => '/v3/user/scheduled_sends/{batch_id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            204,
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\ScheduledSends\\Error\\Response',
            401 => '\\SendGridSDK\\DTOs\\ScheduledSends\\Error\\Response',
            403 => '\\SendGridSDK\\DTOs\\ScheduledSends\\Error\\Response',
            404 => '\\SendGridSDK\\DTOs\\ScheduledSends\\Error\\Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\ScheduledSends\\Error\\Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\ScheduledSends\\Error\\Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\DTOs\\ScheduledSends\\Error\\Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\ScheduledSends\\Error\\Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\User\\ScheduledSends\\ByBatchId\\Patch',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update a scheduled send
     *
     * **This endpoint allows you to update the status of a scheduled send for the given `batch_id`.**
     *
     * If you have already set a `cancel` or `pause` status on a scheduled send using the "Cancel or pause a scheduled send" endpoint, you can update it's status using this endpoint. Attempting to update a status once it has been set with the "Cancel or pause a scheduled send" endpoint will result in a `400` error.
     */
    public function patchByBatchId(string $batch_id, ?\SendGridSDK\PatchParams\V3\User\ScheduledSends\ByBatchId $params = null): void
    {
        $this->executeArguments(self::operation(self::PATCH_BY_BATCH_ID), path: ['batch_id' => $batch_id], parameters: $params);
        return;
    }
}
