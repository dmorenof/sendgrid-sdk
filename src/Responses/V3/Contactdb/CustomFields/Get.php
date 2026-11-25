<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Contactdb\CustomFields;

/**
 * List All Custom Fields response
 */
final class Get extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'custom_fields',
    ];

    public \SendGridSDK\Collections\V3\Contactdb\CustomFields\Get\CustomFieldsCollection $custom_fields;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'custom_fields' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->custom_fields = new \SendGridSDK\Collections\V3\Contactdb\CustomFields\Get\CustomFieldsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendGridSDK\DTOs\Contactdb\CustomFieldId2Xx::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
