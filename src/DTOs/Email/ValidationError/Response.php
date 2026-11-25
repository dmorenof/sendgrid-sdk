<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Email\ValidationError;

/**
 * Error
 * Example: {"errors":[{"field":"field_name","message":"error message"}]}
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \SendGridSDK\Collections\Email\ValidationError\Response\ErrorsCollection $errors;
    /**
     * ID representing the error.
     */
    public string $id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
