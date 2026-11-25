<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Marketing\Singlesends\ById;

final class Schedule extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** DELETE /v3/marketing/singlesends/{id}/schedule [operationId: DeleteScheduledSingleSend] */
    /**
     * Delete Single Send Schedule
     *
     * **This endpoint allows you to cancel a scheduled Single Send using a Single Send ID.**
     *
     * Making a DELETE request to this endpoint will cancel the scheduled sending of a Single Send. The request will not delete the Single Send itself. Deleting a Single Send can be done by passing a DELETE request to `/marketing/singlesends/{id}`.
     */
    public static function delete(string $id): \SendGridSDK\DTOs\Singlesend\Schedule
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Singlesends\ById\Schedule::class)->delete($id);
    }

    /** PUT /v3/marketing/singlesends/{id}/schedule [operationId: ScheduleSingleSend] */
    /**
     * Schedule Single Send
     *
     * **This endpoint allows you to send a Single Send immediately or schedule it to be sent at a later time.**
     *
     * To send your message immediately, set the `send_at` property value to the string `now`. To schedule the Single Send for future delivery, set the `send_at` value to your desired send time in [ISO 8601 date time format](https://www.iso.org/iso-8601-date-and-time-format.html) (`yyyy-MM-ddTHH:mm:ssZ`).
     */
    public static function put(string $id, ?\SendGridSDK\Requests\V3\Marketing\Singlesends\ById\Schedule\Put $payload = null): \SendGridSDK\Responses\V3\Marketing\Singlesends\ById\Schedule\Put
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Singlesends\ById\Schedule::class)->put($id);
        }
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Singlesends\ById\Schedule::class)->put($id, $payload);
    }
}
