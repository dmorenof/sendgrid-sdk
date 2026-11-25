<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Browsers\Stats\Get;

final class BrowsersStatsResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The date that the statistics were gathered.
     */
    public string $date;
    /**
     * The list of statistics.
     */
    public \SendGridSDK\Collections\V3\Browsers\Stats\Get\ResponseItem\ResponseItemStatsCollection $stats;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'date' => is_string($value) ? $this->date = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
