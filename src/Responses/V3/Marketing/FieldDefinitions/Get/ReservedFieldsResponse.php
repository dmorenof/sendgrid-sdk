<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Marketing\FieldDefinitions\Get;

final class ReservedFieldsResponse extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'name' => [
            'minLength' => 1,
            'maxLength' => 100,
        ],
    ];

    public \SendGridSDK\Enums\Field\Type1 $field_type;
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * When `true` this means API consumers are unable to set the value of this field on contacts.
     */
    public bool $read_only;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'field_type' => is_string($value) ? $this->field_type = \SendGridSDK\Enums\Field\Type1::from($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'read_only' => is_bool($value) ? $this->read_only = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
