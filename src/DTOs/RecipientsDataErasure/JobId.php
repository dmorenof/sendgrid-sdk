<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\RecipientsDataErasure;

/**
 * JobId
 * Example: {"job_id":"12a975bd-c742-4713-8f47-cb3ae4e56c74"}
 */
final class JobId extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'job_id',
    ];

    /**
     * The job ID associated with the data erasure request.
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
