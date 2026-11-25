<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs;

final class Forbidden extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The error message tells you the cause of failure.
     * Example: "access forbidden. please ensure you have the correct scopes defined. see https://docs.sendgrid.com/api-reference/how-to-use-the-sendgrid-v3-api/authorization#api-key-permissions-list"
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
