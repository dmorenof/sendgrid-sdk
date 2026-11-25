<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\Errors\V3\Categories\GetStatus400;

final class ErrorsItemResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'field',
        'message',
    ];

    public string $field;
    /**
     * A message explaining why your categories could not be retrieved.
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
