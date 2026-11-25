<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Marketing\FieldDefinitions;

final class Post extends \Dmorenof\SdkRuntime\DTO
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

    public \SendGridSDK\DTOs\Mc\CustomFieldsMetadata $_metadata;
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
            '_metadata' => $value instanceof \stdClass ? $this->_metadata = new \SendGridSDK\DTOs\Mc\CustomFieldsMetadata($value) : parent::assignMember($name, $value),
            'field_type' => is_string($value) ? $this->field_type = \SendGridSDK\Enums\Field\Type2::from($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
