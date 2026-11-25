<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Mail;

final class Batch extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** POST /v3/mail/batch [operationId: CreateMailBatch] */
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
    public static function post(?\SendGridSDK\PostParams\V3\Mail\Batch $params = null): \SendGridSDK\DTOs\Mail\Batch\Response
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Mail\Batch::class)->post($params);
    }

    /** GET /v3/mail/batch/{batch_id} [operationId: GetMailBatch] */
    /**
     * Validate a batch ID.
     *
     * **This operation allows you to validate a mail batch ID.**
     *
     * If you provide a valid batch ID, this operation will return a `200` status code and the batch ID itself.
     * If you provide an invalid batch ID, you will receive a `400` level status code and an error message.
     * A batch ID does not need to be assigned to a send to be considered valid. A successful response means only that the batch ID has been created, but it does not indicate that the ID has been assigned to a send.
     */
    public static function getByBatchId(string $batch_id, ?\SendGridSDK\GetParams\V3\Mail\Batch\ByBatchId $params = null): \SendGridSDK\DTOs\Mail\Batch\Response
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Mail\Batch::class)->getByBatchId($batch_id, $params);
    }
}
