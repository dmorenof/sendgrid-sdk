<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3;

final class Messages extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/messages',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\Responses\\Errors\\V3\\Messages\\GetStatus400Response',
            429 => '\\SendGridSDK\\Responses\\Errors\\Status429Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\V3\\Messages\\GetStatus400Response',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status429Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Messages\\Get',
    ];

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
    public function get(\SendGridSDK\GetParams\V3\Messages $params): \SendGridSDK\Responses\V3\Messages\Get
    {
        /** @var \SendGridSDK\Responses\V3\Messages\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array GET_BY_MSG_ID = [
        'method' => 'GET',
        'path' => '/v3/messages/{msg_id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\Responses\\Errors\\Status400Variant13Response',
            404 => '\\SendGridSDK\\Responses\\Errors\\Status404Variant7Response',
            429 => '\\SendGridSDK\\Responses\\Errors\\Status429Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status400Variant13Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status404Variant7Response',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status429Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Messages\\ByMsgId\\Get',
    ];

    /**
     * Filter messages by message ID
     *
     * Get all of the details about the specified message.
     *
     * For Regional (EU) subusers, no data will be generated for this service.
     *
     */
    public function getByMsgId(string $msg_id): \SendGridSDK\Responses\V3\Messages\ByMsgId\Get
    {
        /** @var \SendGridSDK\Responses\V3\Messages\ByMsgId\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_MSG_ID), path: ['msg_id' => $msg_id]);
        return $result;
    }
}
