<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Stats\Get\ResponseItem;

final class ResponseItemStatsResponse extends \Dmorenof\SdkRuntime\DTO
{
    public \SendGridSDK\DTOs\StatsAdvancedGlobalStats $metrics;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'metrics' => $value instanceof \stdClass ? $this->metrics = new \SendGridSDK\DTOs\StatsAdvancedGlobalStats($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
