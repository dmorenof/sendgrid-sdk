<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Suppression\Bounces\Classifications\Get\ResultItem;

final class ResultItemStatsResponse extends \Dmorenof\SdkRuntime\DTO
{
    public \SendGridSDK\Enums\Classification $classification;
    public int $count;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'classification' => is_string($value) ? $this->classification = \SendGridSDK\Enums\Classification::from($value) : parent::assignMember($name, $value),
            'count' => is_int($value) ? $this->count = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
