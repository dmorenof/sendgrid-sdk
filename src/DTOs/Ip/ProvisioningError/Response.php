<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Ip\ProvisioningError;

/**
 * Error
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'error_id',
        'field',
        'message',
    ];

    /**
     * ID representing the error as a unique number
     */
    public string $error_id;
    /**
     * The field associated with the error
     */
    public string $field;
    /**
     * The message representing the error from the API
     */
    public string $message;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'error_id' => is_string($value) ? $this->error_id = $value : parent::assignMember($name, $value),
            'field' => is_string($value) ? $this->field = $value : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
