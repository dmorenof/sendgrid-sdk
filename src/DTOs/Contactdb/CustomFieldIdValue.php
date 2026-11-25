<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Contactdb;

/**
 * ContactDB Custom field schema.
 */
final class CustomFieldIdValue extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The ID of the custom field.
     */
    public float $id;
    /**
     * The name of the field
     */
    public string $name;
    /**
     * The type of the field.
     */
    public \SendGridSDK\Enums\LmcContactdb\Type $type;
    /**
     * The value of this recipient's custom field
     */
    public ?string $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_float($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \SendGridSDK\Enums\LmcContactdb\Type::from($value) : parent::assignMember($name, $value),
            'value' => $value === null || is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
