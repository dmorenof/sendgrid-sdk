<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\IpsErrorResponse;

final class ErrorsDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * When applicable, this property value will be the field that generated the error.
     */
    public ?string $field;
    /**
     * When applicable, this property value will be helper text or a link to documentation to help you troubleshoot the error.
     */
    public \SendGridSDK\DTOs\IpsErrorResponse\ErrorsItem\HelpDTO $help;
    /**
     * An error message.
     */
    public string $message;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'field' => $value === null || is_string($value) ? $this->field = $value : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
