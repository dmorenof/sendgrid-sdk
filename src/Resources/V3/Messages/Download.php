<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Messages;

final class Download extends \SendGridSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/messages/download',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            202,
        ],
        'errors' => [
            400 => '\\SendGridSDK\\Responses\\Errors\\Status400Variant13Response',
            429 => '\\SendGridSDK\\Responses\\Errors\\Status429Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status400Variant13Response',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status429Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Messages\\Download\\Post',
    ];

    /**
     * Request CSV
     *
     * This request will kick off a backend process to generate a CSV file. Once generated, the worker will then send an email for the user download the file. The link will expire in 3 days.
     *
     * The CSV will contain the events from the last 30 days, limited to the last 1 million events maximum. This endpoint will be rate limited to 1 request every 12 hours (rate limit may change).
     *
     * This endpoint is similar to the GET Single Message endpoint - the only difference is that /download is added to indicate that this is a CSV download requests but the same query is used to determine what the CSV should contain.
     */
    public function post(?\SendGridSDK\PostParams\V3\Messages\Download $params = null): \SendGridSDK\Responses\V3\Messages\Download\Post
    {
        /** @var \SendGridSDK\Responses\V3\Messages\Download\Post $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

    private const array GET_BY_DOWNLOAD_UUID = [
        'method' => 'GET',
        'path' => '/v3/messages/download/{download_uuid}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            404 => '\\SendGridSDK\\Responses\\Errors\\V3\\Messages\\Download\\ByDownloadUuid\\GetStatus404Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\V3\\Messages\\Download\\ByDownloadUuid\\GetStatus404Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Messages\\Download\\ByDownloadUuid\\Get',
    ];

    /**
     * Download CSV
     *
     * **This endpoint will return a presigned URL that can be used to download the CSV that was requested from the "Request a CSV" endpoint.**
     */
    public function getByDownloadUuid(string $download_uuid): \SendGridSDK\Responses\V3\Messages\Download\ByDownloadUuid\Get
    {
        /** @var \SendGridSDK\Responses\V3\Messages\Download\ByDownloadUuid\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_DOWNLOAD_UUID), path: ['download_uuid' => $download_uuid]);
        return $result;
    }
}
