<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Segment;

/**
 * error
 */
final class Error extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'error',
    ];

    /**
     * A description of the error.
     */
    public string $error;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'error' => is_string($value) ? $this->error = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
