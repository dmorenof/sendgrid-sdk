<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Invalid\Delete;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The error message tells you the cause of failure.
     * Example: "IDs cannot be an empty string"
     */
    public string $message;
    /**
     * The parameter shows more information about where the error is. The number in the brackets is the invalid ID indexed.
     * Example: "ids[1]"
     */
    public string $parameter;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            'parameter' => is_string($value) ? $this->parameter = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
