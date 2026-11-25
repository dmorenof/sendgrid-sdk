<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Suppression\Bounces\Classifications\ByClassification\Get\ResultItem;

final class ResultItemStatsResponse extends \Dmorenof\SdkRuntime\DTO
{
    public int $count;
    public string $domain;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'count' => is_int($value) ? $this->count = $value : parent::assignMember($name, $value),
            'domain' => is_string($value) ? $this->domain = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
