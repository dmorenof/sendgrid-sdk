<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Marketing\Contacts\Imports;

final class Put extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The ID of the import job.
     */
    public string $job_id;
    /**
     * A list of headers that must be included in PUT request.
     */
    public \SendGridSDK\Collections\V3\Marketing\Contacts\Imports\Put\UploadHeadersCollection $upload_headers;
    /**
     * The URI to PUT the upload file to.
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
