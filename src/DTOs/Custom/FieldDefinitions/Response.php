<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Custom\FieldDefinitions;

/**
 * custom_field_definitions_response
 * Example: {"id":"a1_D","name":"custom_field_name","field_type":"Date"}
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'field_type',
        'id',
        'name',
    ];

    protected const array VALIDATION = [
        'name' => [
            'minLength' => 1,
            'maxLength' => 100,
        ],
    ];

    public \SendGridSDK\Enums\Field\Type2 $field_type;
    public string $id;
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'field_type' => is_string($value) ? $this->field_type = \SendGridSDK\Enums\Field\Type2::from($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
