<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\GetValidationsEmailJobsJobId200Response;

final class ResultDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Array containing error messages related to the Bulk Email Address Validation Job. Array is empty if no errors ocurred.
     */
    public \SendGridSDK\Collections\GetValidationsEmailJobsJobId200Response\Result\ErrorsCollection $errors;
    /**
     * The ISO8601 timestamp when the Job was finished.
     */
    public float $finished_at;
    /**
     * The unique ID of the Bulk Email Address Validation Job.
     */
    public string $id;
    /**
     * Boolean indicating whether the results CSV file is available for download.
     */
    public bool $is_download_available;
    /**
     * The total number of segments in the Bulk Email Address Validation Job. There are 1,500 email addresses per segment. The value is `0` until the Job `status` is `Processing`.
     */
    public float $segments;
    /**
     * The number of segments processed at the time of the request. 100 segments process in parallel at a time.
     */
    public float $segments_processed;
    /**
     * The ISO8601 timestamp when the Job was created. This is the time at which the upload request was sent to the `upload_uri`.
     */
    public float $started_at;
    /**
     * The status of the Bulk Email Address Validation Job.
     */
    public \SendGridSDK\Enums\Email\ValidationStatus1 $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'finished_at' => is_float($value) ? $this->finished_at = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'is_download_available' => is_bool($value) ? $this->is_download_available = $value : parent::assignMember($name, $value),
            'segments' => is_float($value) ? $this->segments = $value : parent::assignMember($name, $value),
            'segments_processed' => is_float($value) ? $this->segments_processed = $value : parent::assignMember($name, $value),
            'started_at' => is_float($value) ? $this->started_at = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \SendGridSDK\Enums\Email\ValidationStatus1::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
