<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Templates;

/**
 * Example: {"name":"example_name","generation":"dynamic"}
 */
final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'name',
    ];

    protected const array VALIDATION = [
        'name' => [
            'maxLength' => 100,
        ],
    ];

    /**
     * Defines whether the template supports dynamic replacement.
     */
    public \SendGridSDK\Enums\Generation $generation;
    /**
     * The name for the new transactional template.
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
            'generation' => is_string($value) ? $this->generation = \SendGridSDK\Enums\Generation::from($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
