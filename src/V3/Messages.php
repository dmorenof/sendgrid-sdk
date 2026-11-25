<?php

declare(strict_types=1);

namespace SendGridSDK\V3;

final class Messages extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/messages [operationId: ListMessage] */
    /**
     * Filter all messages
     *
     * Filter all messages to search your Email Activity. All queries must be [URL encoded](https://meyerweb.com/eric/tools/dencoder/), and use the following format:
     *
     * `query={query_type}="{query_content}"`
     *
     *  Once URL encoded, the previous query will look like this:
     *
     * `query=type%3D%22query_content%22`
     *
     * For example, to filter by a specific email, use the following query:
     *
     * `query=to_email%3D%22example%40example.com%22`
     *
     * Visit our [Query Reference section](https://docs.sendgrid.com/for-developers/sending-email/getting-started-email-activity-api#query-reference) to see a full list of basic query types and examples.
     */
    public static function get(\SendGridSDK\GetParams\V3\Messages $params): \SendGridSDK\Responses\V3\Messages\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Messages::class)->get($params);
    }

    /** GET /v3/messages/{msg_id} [operationId: GetMessage] */
    /**
     * Filter messages by message ID
     *
     * Get all of the details about the specified message.
     *
     * For Regional (EU) subusers, no data will be generated for this service.
     *
     */
    public static function getByMsgId(string $msg_id): \SendGridSDK\Responses\V3\Messages\ByMsgId\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Messages::class)->getByMsgId($msg_id);
    }
}
