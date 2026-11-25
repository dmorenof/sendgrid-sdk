<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\Errors\V3\Scopes\GetStatus401;

final class ErrorsItemResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'message',
    ];

    /**
     * This empty field is returned instead of the list of scopes if the user making the call doesn't have the authorization required.
     */
    public ?string $field;
    /**
     * Explains why the scopes cannot be returned.
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
