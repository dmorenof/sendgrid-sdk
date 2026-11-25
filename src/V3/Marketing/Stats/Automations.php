<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Marketing\Stats;

final class Automations extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/marketing/stats/automations [operationId: ListAutomationStat] */
    /**
     * Get All Automation Stats
     *
     * **This endpoint allows you to retrieve stats for all your Automations.**
     *
     * By default, all of your Automations will be returned, but you can specify a selection by passing in a comma-separated list of Automation IDs as the value of the query string parameter `automation_ids`.
     *
     * Responses are paginated. You can limit the number of responses returned per batch using the `page_size` query string parameter. The default is 25, but you can specify a value between 1 and 50.
     *
     * You can retrieve a specific page of responses with the `page_token` query string parameter.
     */
    public static function get(?\SendGridSDK\GetParams\V3\Marketing\Stats\Automations $params = null): \SendGridSDK\DTOs\AutomationsResponse
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Stats\Automations::class)->get($params);
    }

    /** GET /v3/marketing/stats/automations/{id} [operationId: GetAutomationStat] */
    /**
     * Get Automation Stats by ID
     *
     * **This endpoint allows you to retrieve stats for a single Automation using its ID.**
     *
     * Multiple Automation IDs can be retrieved using the "Get All Automation Stats" endpoint. Once you have an ID, this endpoint will return detailed stats for the single automation specified.
     *
     * You may constrain the stats returned using the `start_date` and `end_date` query string parameters. You can also use the `group_by` and `aggregated_by` query string parameters to further refine the stats returned.
     */
    public static function getById(string $id, ?\SendGridSDK\GetParams\V3\Marketing\Stats\Automations\ById $params = null): \SendGridSDK\DTOs\AutomationsResponse
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Stats\Automations::class)->getById($id, $params);
    }
}
