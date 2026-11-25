<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Segment;

/**
 * segment_refresh_response
 * Example: {"job_id":"1588e03b-50aa-454a-97d1-e1530345a5ec"}
 */
final class Refresh202 extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The ID of the manual refresh job. Used only for internal purposes.
     */
    public string $job_id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'job_id' => is_string($value) ? $this->job_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
