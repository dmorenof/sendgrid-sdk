<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\ApiKeys\ByApiKeyId;

/**
 * Example: {"name":"A New Hope"}
 */
final class Patch extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'name',
    ];

    /**
     * The new name of the API Key.
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
