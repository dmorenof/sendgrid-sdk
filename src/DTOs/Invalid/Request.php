<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Invalid;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The field shows more information on where the error is when available.
     * Example: "request"
     */
    public string $field;
    /**
     * The error message tells you the cause of validation failure(s), separated by commas if there are multiple failures.
     * Example: "destination_region must be EU or US, write_key must be at least 7 characters"
     */
    public string $message;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'field' => is_string($value) ? $this->field = $value : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
