<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Contact;

/**
 * contact_response
 * Example: {"id":"47d23ab0-d895-4359-a0d1-ffc7a6fc7e70","email":"abcd&#64;gmail.com","alternate_emails":["abcd&#64;yahoo.com","abcd&#64;hotmail.com"],"first_name":"Ab","last_name":"Cd","address_line_1":"street address / P.O. box / CompanyName / c/o","address_line_2":"apartment, suite, unit, building, floor etc","city":"Redwood City","state_province_region":"CA","postal_code":94063,"country":"USA","custom_fields":{"custom_field_name1":"custom_field_value1","custom_field_name2":"custom_field_value2"}}
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'address_line_1',
        'address_line_2',
        'alternate_emails',
        'city',
        'country',
        'custom_fields',
        'first_name',
        'id',
        'last_name',
        'postal_code',
        'state_province_region',
    ];

    protected const array VALIDATION = [
        'address_line_1' => [
            'minLength' => 0,
        ],
        'address_line_2' => [
            'minLength' => 0,
        ],
        'alternate_emails' => [
            'minItems' => 0,
            'uniqueItems' => true,
        ],
        'anonymous_id' => [
            'maxLength' => 254,
        ],
        'city' => [
            'minLength' => 0,
            'pattern' => '^[a-zA-Z\\x{0080}-\\x{024F}\\s\\/\\-\\)\\(\\`\\.\\"\\\']+$',
        ],
        'country' => [
            'minLength' => 0,
        ],
        'custom_fields' => [
            'minProperties' => 0,
        ],
        'email' => [
            'minLength' => 3,
            'maxLength' => 254,
        ],
        'external_id' => [
            'maxLength' => 254,
        ],
        'first_name' => [
            'minLength' => 1,
        ],
        'id' => [
            'maxLength' => 36,
            'pattern' => '[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}',
        ],
        'last_name' => [
            'minLength' => 1,
        ],
        'list_ids' => [
            'uniqueItems' => true,
        ],
        'segment_ids' => [
            'uniqueItems' => true,
        ],
        'state_province_region' => [
            'minLength' => 0,
        ],
    ];

    /**
     * First line of address of the contact. This is a reserved field.
     */
    public string $address_line_1 {
        set {
            $this->assigning('address_line_1', $value);
            $this->address_line_1 = $value;
        }
    }
    /**
     * Second line of address of the contact. This is a reserved field.
     */
    public string $address_line_2 {
        set {
            $this->assigning('address_line_2', $value);
            $this->address_line_2 = $value;
        }
    }
    /**
     * Alternate emails of the contact. This is a reserved field.
     */
    public \SendGridSDK\Collections\Contact\Response\AlternateEmailsCollection $alternate_emails {
        set {
            $this->assigning('alternate_emails', $value);
            $this->alternate_emails = $value;
        }
    }
    /**
     * The contact's Anonymous ID.
     */
    public string $anonymous_id {
        set {
            $this->assigning('anonymous_id', $value);
            $this->anonymous_id = $value;
        }
    }
    /**
     * City associated with the contact. This is a reserved field.
     */
    public string $city {
        set {
            $this->assigning('city', $value);
            $this->city = $value;
        }
    }
    /**
     * Country associated with the address of the contact. This is a reserved field.
     */
    public string $country {
        set {
            $this->assigning('country', $value);
            $this->country = $value;
        }
    }
    /**
     * The user may choose to create up to 120 custom fields or none at all. This is not a reserved field.
     */
    public \SendGridSDK\DTOs\Contact\Response\CustomFieldsDTO $custom_fields {
        set {
            $this->assigning('custom_fields', $value);
            $this->custom_fields = $value;
        }
    }
    /**
     * Email of the contact. This is a reserved field.
     * Format: email
     */
    public string $email {
        set {
            $this->assigning('email', $value);
            $this->email = $value;
        }
    }
    /**
     * The contact's External ID.
     */
    public string $external_id {
        set {
            $this->assigning('external_id', $value);
            $this->external_id = $value;
        }
    }
    /**
     * First name of the contact. This is a reserved field.
     */
    public string $first_name {
        set {
            $this->assigning('first_name', $value);
            $this->first_name = $value;
        }
    }
    /**
     * ID assigned to a contact when added to the system.
     * Format: uuid
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * Last name of the contact. This is a reserved field.
     */
    public string $last_name {
        set {
            $this->assigning('last_name', $value);
            $this->last_name = $value;
        }
    }
    /**
     * IDs of all lists the contact is part of
     */
    public \SendGridSDK\Collections\AllSegments200\ListIdsCollection $list_ids {
        set {
            $this->assigning('list_ids', $value);
            $this->list_ids = $value;
        }
    }
    /**
     * The contact's Phone Number ID. This must be a valid phone number.
     */
    public string $phone_number_id;
    /**
     * Zipcode associated with the address of the contact. This is a reserved field.
     */
    public int $postal_code;
    /**
     * IDs of all segments the contact is part of
     */
    public \SendGridSDK\Collections\AllSegments200\ListIdsCollection $segment_ids {
        set {
            $this->assigning('segment_ids', $value);
            $this->segment_ids = $value;
        }
    }
    /**
     * State associated with the contact. This is a reserved field.
     */
    public string $state_province_region {
        set {
            $this->assigning('state_province_region', $value);
            $this->state_province_region = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address_line_1' => is_string($value) ? $this->address_line_1 = $value : parent::assignMember($name, $value),
            'address_line_2' => is_string($value) ? $this->address_line_2 = $value : parent::assignMember($name, $value),
            'alternate_emails' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->alternate_emails = new \SendGridSDK\Collections\Contact\Response\AlternateEmailsCollection($value) : parent::assignMember($name, $value),
            'anonymous_id' => is_string($value) ? $this->anonymous_id = $value : parent::assignMember($name, $value),
            'city' => is_string($value) ? $this->city = $value : parent::assignMember($name, $value),
            'country' => is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'external_id' => is_string($value) ? $this->external_id = $value : parent::assignMember($name, $value),
            'first_name' => is_string($value) ? $this->first_name = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'last_name' => is_string($value) ? $this->last_name = $value : parent::assignMember($name, $value),
            'list_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->list_ids = new \SendGridSDK\Collections\AllSegments200\ListIdsCollection($value) : parent::assignMember($name, $value),
            'phone_number_id' => is_string($value) ? $this->phone_number_id = $value : parent::assignMember($name, $value),
            'postal_code' => is_int($value) ? $this->postal_code = $value : parent::assignMember($name, $value),
            'segment_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->segment_ids = new \SendGridSDK\Collections\AllSegments200\ListIdsCollection($value) : parent::assignMember($name, $value),
            'state_province_region' => is_string($value) ? $this->state_province_region = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
