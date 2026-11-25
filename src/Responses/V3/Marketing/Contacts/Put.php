<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Marketing\Contacts;

final class Put extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Indicates that the contacts are queued for processing. Check the job status with the "Import Contacts Status" endpoint.
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
