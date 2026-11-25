<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Contact;

/**
 * contact-request
 */
final class Request extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'address_line_1' => [
            'maxLength' => 100,
        ],
        'address_line_2' => [
            'maxLength' => 100,
        ],
        'alternate_emails' => [
            'minItems' => 0,
            'maxItems' => 5,
        ],
        'anonymous_id' => [
            'maxLength' => 254,
        ],
        'city' => [
            'maxLength' => 60,
        ],
        'country' => [
            'maxLength' => 50,
        ],
        'email' => [
            'maxLength' => 254,
        ],
        'external_id' => [
            'maxLength' => 254,
        ],
        'first_name' => [
            'maxLength' => 50,
        ],
        'last_name' => [
            'maxLength' => 50,
        ],
        'state_province_region' => [
            'maxLength' => 50,
        ],
    ];

    /**
     * The first line of the address.
     */
    public string $address_line_1 {
        set {
            $this->assigning('address_line_1', $value);
            $this->address_line_1 = $value;
        }
    }
    /**
     * An optional second line for the address.
     */
    public string $address_line_2 {
        set {
            $this->assigning('address_line_2', $value);
            $this->address_line_2 = $value;
        }
    }
    /**
     * Additional emails associated with the contact.
     */
    public \SendGridSDK\Collections\Contact\Request\AlternateEmailsCollection $alternate_emails {
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
     * The contact's city.
     */
    public string $city {
        set {
            $this->assigning('city', $value);
            $this->city = $value;
        }
    }
    /**
     * The contact's country. Can be a full name or an abbreviation.
     */
    public string $country {
        set {
            $this->assigning('country', $value);
            $this->country = $value;
        }
    }
    /**
     * An object of custom field IDs and the values you want to associate with those custom fields. You can retrieve the IDs of your custom fields from the [Get All Field Definitions endpoint](https://docs.sendgrid.com/api-reference/custom-fields/get-all-field-definitions).
     * Example: {"w1":"coffee","w33":"42","e2":"blue"}
     */
    public \SendGridSDK\DTOs\Contact\Request\CustomFieldsDTO $custom_fields;
    /**
     * The contact's primary email. This is required to be a valid email.
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
     * The contact's personal name.
     */
    public string $first_name {
        set {
            $this->assigning('first_name', $value);
            $this->first_name = $value;
        }
    }
    /**
     * The contact's family name.
     */
    public string $last_name {
        set {
            $this->assigning('last_name', $value);
            $this->last_name = $value;
        }
    }
    /**
     * The contact's Phone Number ID. This must be a valid phone number.
     */
    public string $phone_number_id;
    /**
     * The contact's ZIP code or other postal code.
     */
    public string $postal_code;
    /**
     * The contact's state, province, or region.
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
            'alternate_emails' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->alternate_emails = new \SendGridSDK\Collections\Contact\Request\AlternateEmailsCollection($value) : parent::assignMember($name, $value),
            'anonymous_id' => is_string($value) ? $this->anonymous_id = $value : parent::assignMember($name, $value),
            'city' => is_string($value) ? $this->city = $value : parent::assignMember($name, $value),
            'country' => is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'external_id' => is_string($value) ? $this->external_id = $value : parent::assignMember($name, $value),
            'first_name' => is_string($value) ? $this->first_name = $value : parent::assignMember($name, $value),
            'last_name' => is_string($value) ? $this->last_name = $value : parent::assignMember($name, $value),
            'phone_number_id' => is_string($value) ? $this->phone_number_id = $value : parent::assignMember($name, $value),
            'postal_code' => is_string($value) ? $this->postal_code = $value : parent::assignMember($name, $value),
            'state_province_region' => is_string($value) ? $this->state_province_region = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
