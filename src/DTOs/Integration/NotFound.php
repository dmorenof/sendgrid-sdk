<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Integration;

final class NotFound extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The error message tells you the cause of failure.
     * Example: "integration does not exist (abc)"
     */
    public string $message;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
