<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Suppression\Bounces\Classifications\Get;

final class ClassificationsResultResponse extends \Dmorenof\SdkRuntime\DTO
{
    public string $date;
    public \SendGridSDK\Collections\V3\Suppression\Bounces\Classifications\Get\ResultItem\ResultItemStatsCollection $stats;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'date' => is_string($value) ? $this->date = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
