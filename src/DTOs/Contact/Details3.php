<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Contact;

/**
 * contact-details3
 */
final class Details3 extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'created_at',
        'id',
        'list_ids',
        'segment_ids',
        'updated_at',
    ];

    public \SendGridSDK\DTOs\SelfMetadata $_metadata;
    public string $address_line_1;
    public string $address_line_2;
    public \SendGridSDK\Collections\StringCollection $alternate_emails;
    public string $anonymous_id;
    public string $city;
    public string $country;
    public string $created_at;
    public \SendGridSDK\DTOs\Contact\Details3\CustomFieldsDTO $custom_fields;
    public string $email;
    public string $external_id;
    public string $facebook;
    public string $first_name;
    public string $id;
    public string $last_name;
    public string $line;
    public \SendGridSDK\Collections\StringCollection $list_ids;
    public string $phone_number;
    public string $phone_number_id;
    public string $postal_code;
    public \SendGridSDK\Collections\StringCollection $segment_ids;
    public string $state_province_region;
    public string $unique_name;
    public string $updated_at;
    public string $whatsapp;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            '_metadata' => $value instanceof \stdClass ? $this->_metadata = new \SendGridSDK\DTOs\SelfMetadata($value) : parent::assignMember($name, $value),
            'address_line_1' => is_string($value) ? $this->address_line_1 = $value : parent::assignMember($name, $value),
            'address_line_2' => is_string($value) ? $this->address_line_2 = $value : parent::assignMember($name, $value),
            'alternate_emails' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->alternate_emails = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'anonymous_id' => is_string($value) ? $this->anonymous_id = $value : parent::assignMember($name, $value),
            'city' => is_string($value) ? $this->city = $value : parent::assignMember($name, $value),
            'country' => is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'created_at' => is_string($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'external_id' => is_string($value) ? $this->external_id = $value : parent::assignMember($name, $value),
            'facebook' => is_string($value) ? $this->facebook = $value : parent::assignMember($name, $value),
            'first_name' => is_string($value) ? $this->first_name = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'last_name' => is_string($value) ? $this->last_name = $value : parent::assignMember($name, $value),
            'line' => is_string($value) ? $this->line = $value : parent::assignMember($name, $value),
            'list_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->list_ids = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'phone_number' => is_string($value) ? $this->phone_number = $value : parent::assignMember($name, $value),
            'phone_number_id' => is_string($value) ? $this->phone_number_id = $value : parent::assignMember($name, $value),
            'postal_code' => is_string($value) ? $this->postal_code = $value : parent::assignMember($name, $value),
            'segment_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->segment_ids = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'state_province_region' => is_string($value) ? $this->state_province_region = $value : parent::assignMember($name, $value),
            'unique_name' => is_string($value) ? $this->unique_name = $value : parent::assignMember($name, $value),
            'updated_at' => is_string($value) ? $this->updated_at = $value : parent::assignMember($name, $value),
            'whatsapp' => is_string($value) ? $this->whatsapp = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
