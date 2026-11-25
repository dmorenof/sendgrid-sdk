<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Ip\AddressManagementError\Response;

final class ErrorsDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Indicates which field caused the error. This may be an empty string if no specific field is responsible for the error.
     */
    public string $field;
    /**
     * An error-specific message that provides more information about the error's cause.
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
