<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs;

/**
 * Example: {"errors":[{"field":"field_name","message":"error message"}]}
 */
final class IpsErrorResponse extends \Dmorenof\SdkRuntime\DTO
{
    public \SendGridSDK\Collections\IpsErrorResponse\ErrorsCollection $errors;
    /**
     * When applicable, this property value will be an error ID.
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
