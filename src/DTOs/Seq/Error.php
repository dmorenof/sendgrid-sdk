<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Seq;

/**
 * Error
 *
 * This object contains error details
 */
final class Error extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'message',
    ];

    /**
     * When applicable, this property value will be the field that generated the error.
     */
    public string $field;
    /**
     * An error message.
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
