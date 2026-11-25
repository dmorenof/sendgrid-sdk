<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Marketing\FieldDefinitions;

final class Get extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'custom_fields',
        'reserved_fields',
    ];

    protected const array MODEL_VALIDATION = [
        'minProperties' => 0,
        'maxProperties' => 500,
    ];

    public \SendGridSDK\DTOs\Mc\CustomFieldsMetadata $_metadata;
    public \SendGridSDK\Collections\V3\Marketing\FieldDefinitions\Get\CustomFieldsCollection $custom_fields;
    public \SendGridSDK\Collections\V3\Marketing\FieldDefinitions\Get\ReservedFieldsCollection $reserved_fields;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            '_metadata' => $value instanceof \stdClass ? $this->_metadata = new \SendGridSDK\DTOs\Mc\CustomFieldsMetadata($value) : parent::assignMember($name, $value),
            'custom_fields' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->custom_fields = new \SendGridSDK\Collections\V3\Marketing\FieldDefinitions\Get\CustomFieldsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendGridSDK\DTOs\Custom\FieldDefinitions\Response::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
