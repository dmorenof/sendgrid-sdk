<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Asm\Groups\ByGroupId;

final class Get extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
    ];

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
     * The ID of the suppression group.
     */
    public int $id;
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
    /**
     * The number of unsubscribes, or suppressions, in this group.
     */
    public int $unsubscribes;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'is_default' => is_bool($value) ? $this->is_default = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'unsubscribes' => is_int($value) ? $this->unsubscribes = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
