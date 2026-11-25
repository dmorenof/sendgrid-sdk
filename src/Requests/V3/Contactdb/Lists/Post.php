<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Contactdb\Lists;

/**
 * Create a List request
 * Example: {"name":"your list name"}
 */
final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'name',
    ];

    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
