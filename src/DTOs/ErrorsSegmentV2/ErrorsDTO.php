<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\ErrorsSegmentV2;

final class ErrorsDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'field',
        'message',
    ];

    /**
     * the field in the request body that is incorrect
     */
    public string $field;
    /**
     * a description of what is specifically wrong with the field passed in the request
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
