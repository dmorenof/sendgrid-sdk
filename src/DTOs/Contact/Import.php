<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Contact;

/**
 * contact-import
 */
final class Import extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The ISO8601 timestamp when the job was finished.
     */
    public string $finished_at;
    /**
     * The job ID.
     */
    public string $id;
    /**
     * The job type. Allowed values: `upsert`, or `delete`.
     */
    public string $job_type;
    /**
     * Result map of the import job.
     */
    public \SendGridSDK\DTOs\Contact\Import\ResultsDTO $results;
    /**
     * The ISO8601 timestamp when the job was created.
     */
    public string $started_at;
    /**
     * The job state. Allowed values: `pending`, `completed`, `errored`, or `failed`.
     */
    public string $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'finished_at' => is_string($value) ? $this->finished_at = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'job_type' => is_string($value) ? $this->job_type = $value : parent::assignMember($name, $value),
            'started_at' => is_string($value) ? $this->started_at = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
