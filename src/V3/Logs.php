<?php

declare(strict_types=1);

namespace SendGridSDK\V3;

final class Logs extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** POST /v3/logs [operationId: ListMessagesByFilter] */
    /**
     * Search all messages using the provided query filters.
     *
     * List recent messages within Email Logs, or search for messages using a filter.
     *
     */
    public static function post(\SendGridSDK\DTOs\Email\LogsGetMessagesByFilter\Request $payload): \SendGridSDK\DTOs\Email\LogsGetMessagesByFilter\Response|\SendGridSDK\DTOs\Logs\Error\Response|null
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Logs::class)->post($payload);
    }

    /** GET /v3/logs/{sg_message_id} [operationId: GetMessageById] */
    /**
     * Get all details for the specified message ID.
     *
     * Get all of the details about the specified message.
     */
    public static function getBySgMessageId(string $sg_message_id, ?\SendGridSDK\GetParams\V3\Logs\BySgMessageId $params = null): \SendGridSDK\DTOs\Email\LogsGetMessageById\Response|\SendGridSDK\DTOs\Logs\Error\Response|null
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Logs::class)->getBySgMessageId($sg_message_id, $params);
    }
}
