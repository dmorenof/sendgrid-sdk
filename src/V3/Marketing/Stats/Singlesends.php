<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Marketing\Stats;

final class Singlesends extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/marketing/stats/singlesends [operationId: ListSingleSendStat] */
    /**
     * Get All Single Sends Stats
     *
     * **This endpoint allows you to retrieve stats for all your Single Sends.**
     *
     * By default, all of your Single Sends will be returned, but you can specify a selection by passing in a comma-separated list of Single Send IDs as the value of the query string parameter `singlesend_ids`.
     *
     * Responses are paginated. You can limit the number of responses returned per batch using the `page_size` query string parameter. The default is 25, but you specify a value between 1 and 50.
     *
     * You can retrieve a specific page of responses with the `page_token` query string parameter.
     */
    public static function get(?\SendGridSDK\GetParams\V3\Marketing\Stats\Singlesends $params = null): \SendGridSDK\DTOs\SinglesendsResponse
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Stats\Singlesends::class)->get($params);
    }

    /** GET /v3/marketing/stats/singlesends/{id} [operationId: GetSingleSendStat] */
    /**
     * Get Single Send Stats by ID
     *
     * **This endpoint allows you to retrieve stats for an individual Single Send using a Single Send ID.**
     *
     * Multiple Single Send IDs can be retrieved using the "Get All Single Sends Stats" endpoint. Once you have an ID, this endpoint will return detailed stats for the Single Send specified.
     *
     * You may constrain the stats returned using the `start_date` and `end_date` query string parameters. You can also use the `group_by` and `aggregated_by` query string parameters to further refine the stats returned.
     */
    public static function getById(string $id, ?\SendGridSDK\GetParams\V3\Marketing\Stats\Singlesends\ById $params = null): \SendGridSDK\DTOs\SinglesendsResponse
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Stats\Singlesends::class)->getById($id, $params);
    }
}
