<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Stats\Get;

final class StatsResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'date',
        'stats',
    ];

    /**
     * The date the stats were gathered.
     */
    public string $date;
    /**
     * The individual email activity stats.
     */
    public \SendGridSDK\Collections\V3\Stats\Get\ResponseItem\ResponseItemStatsCollection $stats;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'date' => is_string($value) ? $this->date = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
