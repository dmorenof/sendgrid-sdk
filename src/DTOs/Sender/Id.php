<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Sender;

/**
 * Sender ID
 * Example: {"id":1,"nickname":"My Sender ID","from":{"email":"from&#64;example.com","name":"Example INC"},"reply_to":{"email":"replyto&#64;example.com","name":"Example INC"},"address":"123 Elm St.","address_2":"Apt. 456","city":"Denver","state":"Colorado","zip":"80202","country":"United States","verified":true,"updated_at":1449872165,"created_at":1449872165,"locked":false}
 */
final class Id extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'address',
        'city',
        'country',
        'nickname',
    ];

    /**
     * The physical address of the sender identity.
     */
    public string $address;
    /**
     * Additional sender identity address information.
     */
    public string $address_2;
    /**
     * The city of the sender identity.
     */
    public string $city;
    /**
     * The country of the sender identity.
     */
    public string $country;
    /**
     * The time the sender identity was created.
     */
    public int $created_at;
    public \SendGridSDK\DTOs\Sender\Id\FromDTO $from;
    /**
     * The unique identifier of the sender identity.
     */
    public int $id;
    /**
     * True when the sender id is associated to a campaign in the Draft, Scheduled, or In Progress status. You cannot update or delete a locked sender identity.
     */
    public bool $locked;
    /**
     * A nickname for the sender identity. Not used for sending.
     */
    public string $nickname;
    public \SendGridSDK\DTOs\Sender\Id\ReplyToDTO $reply_to;
    /**
     * The state of the sender identity.
     */
    public string $state;
    /**
     * The time the sender identity was last updated.
     */
    public int $updated_at;
    /**
     * If the sender identity is verified or not. Only verified sender identities can be used to send email.
     */
    public bool $verified;
    /**
     * The zipcode of the sender identity.
     */
    public string $zip;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address' => is_string($value) ? $this->address = $value : parent::assignMember($name, $value),
            'address_2' => is_string($value) ? $this->address_2 = $value : parent::assignMember($name, $value),
            'city' => is_string($value) ? $this->city = $value : parent::assignMember($name, $value),
            'country' => is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'created_at' => is_int($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'locked' => is_bool($value) ? $this->locked = $value : parent::assignMember($name, $value),
            'nickname' => is_string($value) ? $this->nickname = $value : parent::assignMember($name, $value),
            'state' => is_string($value) ? $this->state = $value : parent::assignMember($name, $value),
            'updated_at' => is_int($value) ? $this->updated_at = $value : parent::assignMember($name, $value),
            'verified' => is_bool($value) ? $this->verified = $value : parent::assignMember($name, $value),
            'zip' => is_string($value) ? $this->zip = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
