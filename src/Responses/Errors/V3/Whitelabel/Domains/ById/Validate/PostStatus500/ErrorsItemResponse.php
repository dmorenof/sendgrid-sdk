<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\Errors\V3\Whitelabel\Domains\ById\Validate\PostStatus500;

final class ErrorsItemResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'message',
    ];

    /**
     * A message explaining the reason for the error.
     */
    public string $message;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
