<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Logs;

final class Error extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'message',
    ];

    /**
     * (Optional) The field that caused the error.
     */
    public string $field;
    /**
     * Error message.
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
