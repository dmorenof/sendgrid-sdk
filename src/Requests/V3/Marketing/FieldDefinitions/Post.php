<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Marketing\FieldDefinitions;

/**
 * Example: {"name":"custom_field_name","field_type":"Text"}
 */
final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'field_type',
        'name',
    ];

    protected const array VALIDATION = [
        'name' => [
            'minLength' => 1,
            'maxLength' => 100,
        ],
    ];

    public \SendGridSDK\Enums\Field\Type $field_type;
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'field_type' => is_string($value) ? $this->field_type = \SendGridSDK\Enums\Field\Type::from($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
