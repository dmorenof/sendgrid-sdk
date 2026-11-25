<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Marketing\Contacts\ByContactId\Identifiers;

/**
 * Example: {"identifier_type":"PHONENUMBERID","identifier_value":"15555555555"}
 */
final class Delete extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'identifier_type',
        'identifier_value',
    ];

    /**
     * The type of identifier you are removing from the contact.
     */
    public \SendGridSDK\Enums\IdentifierType $identifier_type;
    /**
     * The value of the identifier you want to remove from the contact.
     */
    public string $identifier_value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'identifier_type' => is_string($value) ? $this->identifier_type = \SendGridSDK\Enums\IdentifierType::from($value) : parent::assignMember($name, $value),
            'identifier_value' => is_string($value) ? $this->identifier_value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
