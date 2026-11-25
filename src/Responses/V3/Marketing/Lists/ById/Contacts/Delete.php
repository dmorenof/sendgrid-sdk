<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Marketing\Lists\ById\Contacts;

/**
 * The removal is accepted and processing.
 */
final class Delete extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * job_id of the async job
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
