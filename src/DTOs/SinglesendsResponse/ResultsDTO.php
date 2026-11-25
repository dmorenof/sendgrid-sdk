<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\SinglesendsResponse;

final class ResultsDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'ab_phase',
        'ab_variation',
        'id',
    ];

    /**
     * This is the A/B phase of the Single Send stat returned. If the `group_by` parameter doesn't include `ab_phase` in the request, then the value is "all".
     */
    public \SendGridSDK\Enums\Ab\Phase $ab_phase;
    /**
     * This is the A/B variation of the Single Send stat returned. If the `group_by` parameter doesn't include `ab_variation` in the request, then the value is "all".
     * Format: uuid
     */
    public string $ab_variation;
    /**
     * This describes the time unit to which the stat is rolled up. It is based on the `aggregated_by` parameter included in the request. It can be "total" or the date (in YYYY-MM-DD format) the stats are for.
     */
    public string $aggregation;
    /**
     * This is the ID of the Single Send you require stats for.
     * Format: uuid
     */
    public string $id;
    public \SendGridSDK\DTOs\Metrics $stats;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ab_phase' => is_string($value) ? $this->ab_phase = \SendGridSDK\Enums\Ab\Phase::from($value) : parent::assignMember($name, $value),
            'ab_variation' => is_string($value) ? $this->ab_variation = $value : parent::assignMember($name, $value),
            'aggregation' => is_string($value) ? $this->aggregation = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'stats' => $value instanceof \stdClass ? $this->stats = new \SendGridSDK\DTOs\Metrics($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
