<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Contactdb;

/**
 * ContactDB Custom field schema.
 * Example: {"name":"first_name","type":"text"}
 */
final class CustomField extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The name of the field
     */
    public string $name;
    /**
     * The type of the field.
     */
    public \SendGridSDK\Enums\LmcContactdb\Type $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \SendGridSDK\Enums\LmcContactdb\Type::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
