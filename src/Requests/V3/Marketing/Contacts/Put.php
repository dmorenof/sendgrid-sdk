<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Marketing\Contacts;

final class Put extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'contacts',
    ];

    protected const array VALIDATION = [
        'contacts' => [
            'minItems' => 1,
            'maxItems' => 30000,
        ],
    ];

    /**
     * One or more contacts objects that you intend to upsert. Each contact needs to include at least one of `email`, `phone_number_id`, `external_id`, or `anonymous_id` as an identifier.
     */
    public \SendGridSDK\Collections\V3\Marketing\Contacts\Put\ContactsContactsCollection $contacts {
        set {
            $this->assigning('contacts', $value);
            $this->contacts = $value;
        }
    }
    /**
     * An array of List ID strings that this contact will be added to.
     */
    public \SendGridSDK\Collections\StringCollection $list_ids;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'contacts' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->contacts = new \SendGridSDK\Collections\V3\Marketing\Contacts\Put\ContactsContactsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendGridSDK\DTOs\Contact\Request::class)) : parent::assignMember($name, $value),
            'list_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->list_ids = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
