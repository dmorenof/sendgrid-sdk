<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs;

/**
 * Update Email Validations Jobs 200 Response
 */
final class PutValidationsEmailJobs200Response extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The unique ID of the Bulk Email Address Validation Job.
     */
    public string $job_id;
    /**
     * Array containing headers and header values.
     */
    public \SendGridSDK\Collections\PutValidationsEmailJobs200Response\UploadHeadersCollection $upload_headers;
    /**
     * The URI to use for the request to upload your list of email addresses.
     */
    public string $upload_uri;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'job_id' => is_string($value) ? $this->job_id = $value : parent::assignMember($name, $value),
            'upload_uri' => is_string($value) ? $this->upload_uri = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
