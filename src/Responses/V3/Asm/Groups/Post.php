<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Asm\Groups;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'description',
        'id',
        'is_default',
        'name',
    ];

    /**
     * A brief description of the suppression group.
     */
    public string $description;
    /**
     * The ID of the suppression group.
     */
    public int $id;
    /**
     * Indicates if this is the default suppression group.
     */
    public bool $is_default;
    /**
     * The name of the suppression group.
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'is_default' => is_bool($value) ? $this->is_default = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
