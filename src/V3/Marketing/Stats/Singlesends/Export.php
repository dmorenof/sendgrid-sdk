<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Marketing\Stats\Singlesends;

final class Export extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/marketing/stats/singlesends/export [operationId: ExportSingleSendStat] */
    /**
     * Export Single Send Stats
     *
     * **This endpoint allows you to export Single Send stats as .CSV data**.
     *
     * You can specify one Single Send or many: include as many Single Send IDs as you need, separating them with commas, as the value of the `ids` query string parameter.
     *
     * The data is returned as plain text response but in .CSV format, so your application making the call can present the information in whatever way is most appropriate, or just save the data as a .csv file.
     */
    public static function get(?\SendGridSDK\GetParams\V3\Marketing\Stats\Singlesends\Export $params = null): string
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Stats\Singlesends\Export::class)->get($params);
    }
}
