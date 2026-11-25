<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Contact\Response;

/**
 * The user may choose to create up to 120 custom fields or none at all. This is not a reserved field.
 */
final class CustomFieldsDTO extends \Dmorenof\SdkRuntime\DTO
{
    protected const array MODEL_VALIDATION = [
        'minProperties' => 0,
    ];

    protected const array VALIDATION = [
        'custom_field_name1' => [
            'minLength' => 0,
        ],
        'custom_field_name2' => [
            'minLength' => 0,
        ],
    ];

    public string $custom_field_name1 {
        set {
            $this->assigning('custom_field_name1', $value);
            $this->custom_field_name1 = $value;
        }
    }
    public string $custom_field_name2 {
        set {
            $this->assigning('custom_field_name2', $value);
            $this->custom_field_name2 = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'custom_field_name1' => is_string($value) ? $this->custom_field_name1 = $value : parent::assignMember($name, $value),
            'custom_field_name2' => is_string($value) ? $this->custom_field_name2 = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
