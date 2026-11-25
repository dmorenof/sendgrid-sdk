<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\User\Webhooks\Parse\Stats\Get\ResponseItem;

final class ResponseItemStatsResponse extends \Dmorenof\SdkRuntime\DTO
{
    public \SendGridSDK\Responses\V3\User\Webhooks\Parse\Stats\Get\ResponseItem\StatsItem\StatsItemMetricsResponse $metrics;
}
