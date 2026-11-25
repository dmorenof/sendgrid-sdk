<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Clients\Stats\Get;

final class ClientsStatsResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The date that the statistics were gathered.
     */
    public string $date;
    /**
     * The list of statistics.
     */
    public \SendGridSDK\Collections\V3\Clients\Stats\Get\ResponseItem\ResponseItemStatsCollection $stats;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'date' => is_string($value) ? $this->date = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
