<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Marketing\Lists;

/**
 * Example: {"name":"list-name"}
 */
final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'name',
    ];

    protected const array VALIDATION = [
        'name' => [
            'minLength' => 1,
            'maxLength' => 100,
        ],
    ];

    /**
     * Your name for your list
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
