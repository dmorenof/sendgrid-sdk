<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\PutValidationsEmailJobs200Response;

final class UploadHeadersDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The name of the header that must be included in the upload request.
     */
    public string $header;
    /**
     * The value of the header that must be included in the upload request.
     */
    public string $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'header' => is_string($value) ? $this->header = $value : parent::assignMember($name, $value),
            'value' => is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
