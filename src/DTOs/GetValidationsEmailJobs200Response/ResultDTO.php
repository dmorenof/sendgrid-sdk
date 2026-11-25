<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\GetValidationsEmailJobs200Response;

final class ResultDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The ISO8601 timestamp when the Job was finished.
     */
    public float $finished_at;
    /**
     * The unique ID of the Bulk Email Address Validation Job.
     */
    public string $id;
    /**
     * The ISO8601 timestamp when the Job was created. This is the time at which the upload request was sent to the `upload_uri`.
     */
    public float $started_at;
    /**
     * The status of the Bulk Email Address Validation Job.
     */
    public \SendGridSDK\Enums\Email\ValidationStatus $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'finished_at' => is_float($value) ? $this->finished_at = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'started_at' => is_float($value) ? $this->started_at = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \SendGridSDK\Enums\Email\ValidationStatus::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
