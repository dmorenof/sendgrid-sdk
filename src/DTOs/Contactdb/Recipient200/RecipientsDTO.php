<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Contactdb\Recipient200;

final class RecipientsDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'email',
    ];

    /**
     * The time this record was created in your contactdb, in unixtime.
     */
    public float $created_at;
    /**
     * The custom fields assigned to this recipient and their values.
     */
    public \SendGridSDK\Collections\Contactdb\Recipient200\RecipientsItem\CustomFieldsCollection $custom_fields;
    /**
     * The email address of this recipient. This is a default custom field that SendGrid provides.
     * Format: email
     */
    public string $email;
    /**
     * The first name of this recipient. This is a default custom field that SendGrid provides.
     */
    public ?string $first_name;
    /**
     * The ID of this recipient.
     */
    public string $id;
    /**
     * The last time this recipient clicked a link from one of your campaigns, in unixtime.
     */
    public ?float $last_clicked;
    /**
     * The last time this user was emailed by one of your campaigns, in unixtime.
     */
    public ?float $last_emailed;
    /**
     * The last name of the recipient.
     */
    public ?string $last_name;
    /**
     * The last time this recipient opened an email from you, in unixtime.
     */
    public ?float $last_opened;
    /**
     * The last update date for this recipient's record.
     */
    public float $updated_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'created_at' => is_float($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'custom_fields' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->custom_fields = new \SendGridSDK\Collections\Contactdb\Recipient200\RecipientsItem\CustomFieldsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendGridSDK\DTOs\Contactdb\CustomFieldIdValue::class)) : parent::assignMember($name, $value),
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'first_name' => $value === null || is_string($value) ? $this->first_name = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'last_clicked' => $value === null || is_float($value) ? $this->last_clicked = $value : parent::assignMember($name, $value),
            'last_emailed' => $value === null || is_float($value) ? $this->last_emailed = $value : parent::assignMember($name, $value),
            'last_name' => $value === null || is_string($value) ? $this->last_name = $value : parent::assignMember($name, $value),
            'last_opened' => $value === null || is_float($value) ? $this->last_opened = $value : parent::assignMember($name, $value),
            'updated_at' => is_float($value) ? $this->updated_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
