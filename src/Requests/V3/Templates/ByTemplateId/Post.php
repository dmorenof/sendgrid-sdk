<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Templates\ByTemplateId;

/**
 * Example: {"name":"example_name"}
 */
final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'name' => [
            'maxLength' => 100,
        ],
    ];

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
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
