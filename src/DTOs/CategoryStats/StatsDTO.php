<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\CategoryStats;

final class StatsDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \SendGridSDK\DTOs\CategoryStats\StatsItem\MetricsDTO $metrics;
    /**
     * The name of the category.
     */
    public string $name;
    /**
     * How you are segmenting your statistics.
     */
    public string $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
