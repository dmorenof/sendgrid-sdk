<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Contact\Request;

/**
 * An object of custom field IDs and the values you want to associate with those custom fields. You can retrieve the IDs of your custom fields from the [Get All Field Definitions endpoint](https://docs.sendgrid.com/api-reference/custom-fields/get-all-field-definitions).
 * Example: {"w1":"coffee","w33":"42","e2":"blue"}
 */
final class CustomFieldsDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The properties in this object are made up of a key (the custom field ID) and value you want associated with that custom field. For example `{"w1": "coffee"}`.
     */
    public string $w1;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'w1' => is_string($value) ? $this->w1 = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
