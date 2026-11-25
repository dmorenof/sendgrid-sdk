<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\AutomationsResponse;

final class ResultsDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'aggregation',
        'id',
        'step_id',
    ];

    /**
     * This describes the time unit to which the stat is rolled up. It is based on the `aggregated_by` parameter included in the request. It can be "total" or the date (in YYYY-MM-DD format) the stats are for.
     */
    public string $aggregation;
    /**
     * This is the ID of the Automation you are requesting stats for.
     * Format: uuid
     */
    public string $id;
    public \SendGridSDK\DTOs\Metrics $stats;
    /**
     * This is the ID of the step if the stats were requested to be grouped by `step_id`.
     */
    public string $step_id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'aggregation' => is_string($value) ? $this->aggregation = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'stats' => $value instanceof \stdClass ? $this->stats = new \SendGridSDK\DTOs\Metrics($value) : parent::assignMember($name, $value),
            'step_id' => is_string($value) ? $this->step_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
