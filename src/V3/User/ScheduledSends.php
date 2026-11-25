<?php

declare(strict_types=1);

namespace SendGridSDK\V3\User;

final class ScheduledSends extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/user/scheduled_sends [operationId: ListScheduledSend] */
    /**
     * Retrieve all scheduled sends
     *
     * **This endpoint allows you to retrieve all cancelled and paused scheduled send information.**
     *
     * This endpoint will return only the scheduled sends that are associated with a `batch_id`. If you have scheduled a send using the `/mail/send` endpoint and the `send_at` field but no `batch_id`, the send will be scheduled for delivery; however, it will not be returned by this endpoint. For this reason, you should assign a `batch_id` to any scheduled send you may need to pause or cancel in the future.
     */
    public static function get(?\SendGridSDK\GetParams\V3\User\ScheduledSends $params = null): \SendGridSDK\Collections\V3\User\ScheduledSends\Get\UserScheduledSendsCollection
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\User\ScheduledSends::class)->get($params);
    }

    /** POST /v3/user/scheduled_sends [operationId: CreateScheduledSend] */
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
    public static function post(?\SendGridSDK\PostParams\V3\User\ScheduledSends $params = null): \SendGridSDK\DTOs\ScheduledSendStatus
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\User\ScheduledSends::class)->post($params);
    }

    /** DELETE /v3/user/scheduled_sends/{batch_id} [operationId: DeleteScheduledSend] */
    /**
     * Delete a cancellation or pause from a scheduled send
     *
     * **This endpoint allows you to delete the cancellation/pause of a scheduled send.**
     *
     * Scheduled sends cancelled less than 10 minutes before the scheduled time are not guaranteed to be cancelled.
     */
    public static function deleteByBatchId(string $batch_id, ?\SendGridSDK\DeleteParams\V3\User\ScheduledSends\ByBatchId $params = null): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\User\ScheduledSends::class)->deleteByBatchId($batch_id, $params);
    }

    /** GET /v3/user/scheduled_sends/{batch_id} [operationId: GetScheduledSend] */
    /**
     * Retrieve scheduled send
     *
     * **This endpoint allows you to retrieve the cancel/paused scheduled send information for a specific `batch_id`.**
     */
    public static function getByBatchId(string $batch_id, ?\SendGridSDK\GetParams\V3\User\ScheduledSends\ByBatchId $params = null): \SendGridSDK\Collections\V3\User\ScheduledSends\Get\UserScheduledSendsCollection
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\User\ScheduledSends::class)->getByBatchId($batch_id, $params);
    }

    /** PATCH /v3/user/scheduled_sends/{batch_id} [operationId: UpdateScheduledSend] */
    /**
     * Update a scheduled send
     *
     * **This endpoint allows you to update the status of a scheduled send for the given `batch_id`.**
     *
     * If you have already set a `cancel` or `pause` status on a scheduled send using the "Cancel or pause a scheduled send" endpoint, you can update it's status using this endpoint. Attempting to update a status once it has been set with the "Cancel or pause a scheduled send" endpoint will result in a `400` error.
     */
    public static function patchByBatchId(string $batch_id, ?\SendGridSDK\PatchParams\V3\User\ScheduledSends\ByBatchId $params = null): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\User\ScheduledSends::class)->patchByBatchId($batch_id, $params);
    }
}
