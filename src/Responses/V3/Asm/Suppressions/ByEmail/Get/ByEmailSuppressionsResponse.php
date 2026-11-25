<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Asm\Suppressions\ByEmail\Get;

final class ByEmailSuppressionsResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'description',
        'id',
        'is_default',
        'name',
        'suppressed',
    ];

    /**
     * The description of the suppression group.
     */
    public string $description;
    /**
     * The id of the suppression group.
     */
    public int $id;
    /**
     * Indicates if the suppression group  is set as the default.
     */
    public bool $is_default;
    /**
     * The name of the suppression group.
     */
    public string $name;
    /**
     * Indicates if the given email address is suppressed for this group.
     */
    public bool $suppressed;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'is_default' => is_bool($value) ? $this->is_default = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'suppressed' => is_bool($value) ? $this->suppressed = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
