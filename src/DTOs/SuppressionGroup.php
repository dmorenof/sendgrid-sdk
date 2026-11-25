<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs;

/**
 * Suppressions: Suppression Group
 */
final class SuppressionGroup extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'description',
        'id',
        'name',
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
     * A description of the suppression group.
     */
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * The id of the suppression group.
     */
    public float $id;
    /**
     * Indicates if this is the default suppression group.
     */
    public bool $is_default;
    /**
     * The name of the suppression group. Each group created by a user must have a unique name.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * The unsubscribes associated with this group.
     */
    public int $unsubscribes;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'id' => is_float($value) ? $this->id = $value : parent::assignMember($name, $value),
            'is_default' => is_bool($value) ? $this->is_default = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'unsubscribes' => is_int($value) ? $this->unsubscribes = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
