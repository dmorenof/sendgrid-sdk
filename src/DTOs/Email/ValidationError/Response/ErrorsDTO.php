<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Email\ValidationError\Response;

final class ErrorsDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'message',
    ];

    /**
     * The field associated with the error.
     */
    public string $field;
    /**
     * Helper text or docs for troubleshooting.
     */
    public \SendGridSDK\DTOs\Email\ValidationError\Response\ErrorsItem\HelpDTO $help;
    /**
     * The message representing the error from the API.
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
