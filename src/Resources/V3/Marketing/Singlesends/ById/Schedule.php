<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Marketing\Singlesends\ById;

final class Schedule extends \SendGridSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/v3/marketing/singlesends/{id}/schedule',
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
        'responseType' => '\\SendGridSDK\\DTOs\\Singlesend\\Schedule',
    ];

    /**
     * Delete Single Send Schedule
     *
     * **This endpoint allows you to cancel a scheduled Single Send using a Single Send ID.**
     *
     * Making a DELETE request to this endpoint will cancel the scheduled sending of a Single Send. The request will not delete the Single Send itself. Deleting a Single Send can be done by passing a DELETE request to `/marketing/singlesends/{id}`.
     */
    public function delete(string $id): \SendGridSDK\DTOs\Singlesend\Schedule
    {
        /** @var \SendGridSDK\DTOs\Singlesend\Schedule $result */
        $result = $this->executeArguments(self::operation(self::DELETE), path: ['id' => $id]);
        return $result;
    }

    private const array PUT = [
        'method' => 'PUT',
        'path' => '/v3/marketing/singlesends/{id}/schedule',
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
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Marketing\\Singlesends\\ById\\Schedule\\Put',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Marketing\\Singlesends\\ById\\Schedule\\Put',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Schedule Single Send
     *
     * **This endpoint allows you to send a Single Send immediately or schedule it to be sent at a later time.**
     *
     * To send your message immediately, set the `send_at` property value to the string `now`. To schedule the Single Send for future delivery, set the `send_at` value to your desired send time in [ISO 8601 date time format](https://www.iso.org/iso-8601-date-and-time-format.html) (`yyyy-MM-ddTHH:mm:ssZ`).
     */
    public function put(string $id, ?\SendGridSDK\Requests\V3\Marketing\Singlesends\ById\Schedule\Put $payload = null): \SendGridSDK\Responses\V3\Marketing\Singlesends\ById\Schedule\Put
    {
        /** @var \SendGridSDK\Responses\V3\Marketing\Singlesends\ById\Schedule\Put $result */
        $result = func_num_args() > 1 ? $this->executeBody(self::operation(self::PUT), $payload, path: ['id' => $id]) : $this->executeArguments(self::operation(self::PUT), path: ['id' => $id]);
        return $result;
    }
}
