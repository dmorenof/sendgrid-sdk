<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Suppression\Bounces;

final class Classifications extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/suppression/bounces/classifications [operationId: ListSuppressionBouncesClassifications] */
    /**
     * Retrieve bounce classification totals
     *
     * This endpoint will return the total number of bounces by classification in descending order for each day. You can retrieve the bounce classification totals in CSV format by specifying `"text/csv"` in the Accept header.
     */
    public static function get(\SendGridSDK\GetParams\V3\Suppression\Bounces\Classifications $params): \SendGridSDK\Responses\V3\Suppression\Bounces\Classifications\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Suppression\Bounces\Classifications::class)->get($params);
    }

    /** GET /v3/suppression/bounces/classifications/{classification} [operationId: GetSuppressionBouncesClassifications] */
    /**
     * Retrieve bounce classification over time by domain stats
     *
     * This endpoint will return the number of bounces for the classification specified in descending order for each day. You can retrieve the bounce classification totals in CSV format by specifying `"text/csv"` in the Accept header.
     */
    public static function getByClassification(\SendGridSDK\Enums\Classification1 $classification, \SendGridSDK\GetParams\V3\Suppression\Bounces\Classifications\ByClassification $params): \SendGridSDK\Responses\V3\Suppression\Bounces\Classifications\ByClassification\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Suppression\Bounces\Classifications::class)->getByClassification($classification, $params);
    }
}
