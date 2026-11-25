<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Asm\Groups\ByGroupId;

/**
 * Example: {"id":103,"name":"Item Suggestions","description":"Suggestions for items our users might like."}
 */
final class Patch extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 100,
        ],
        'name' => [
            'maxLength' => 30,
        ],
    ];

    /**
     * A brief description of your suppression group. Required when creating a group.
     */
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * Indicates if you would like this to be your default suppression group.
     */
    public bool $is_default;
    /**
     * The name of your suppression group. Required when creating a group.
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
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'is_default' => is_bool($value) ? $this->is_default = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
