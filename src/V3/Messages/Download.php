<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Messages;

final class Download extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** POST /v3/messages/download [operationId: RequestCsv] */
    /**
     * Request CSV
     *
     * This request will kick off a backend process to generate a CSV file. Once generated, the worker will then send an email for the user download the file. The link will expire in 3 days.
     *
     * The CSV will contain the events from the last 30 days, limited to the last 1 million events maximum. This endpoint will be rate limited to 1 request every 12 hours (rate limit may change).
     *
     * This endpoint is similar to the GET Single Message endpoint - the only difference is that /download is added to indicate that this is a CSV download requests but the same query is used to determine what the CSV should contain.
     */
    public static function post(?\SendGridSDK\PostParams\V3\Messages\Download $params = null): \SendGridSDK\Responses\V3\Messages\Download\Post
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Messages\Download::class)->post($params);
    }

    /** GET /v3/messages/download/{download_uuid} [operationId: DownloadCsv] */
    /**
     * Download CSV
     *
     * **This endpoint will return a presigned URL that can be used to download the CSV that was requested from the "Request a CSV" endpoint.**
     */
    public static function getByDownloadUuid(string $download_uuid): \SendGridSDK\Responses\V3\Messages\Download\ByDownloadUuid\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Messages\Download::class)->getByDownloadUuid($download_uuid);
    }
}
