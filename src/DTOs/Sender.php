<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs;

/**
 * Sender
 * Example: {"id":1,"nickname":"Example Orders","from":{"email":"orders&#64;example.com","name":"Example Orders"},"reply_to":{"email":"support&#64;example.com","name":"Example Support"},"address":"1234 Fake St.","address_2":"","city":"San Francisco","state":"CA","zip":"94105","country":"United States","verified":true,"updated_at":1449872165,"created_at":1449872165,"locked":false}
 */
final class Sender extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'address',
        'city',
        'country',
        'created_at',
        'from',
        'id',
        'locked',
        'nickname',
        'reply_to',
        'updated_at',
        'verified',
    ];

    /**
     * The physical address of the Sender.
     */
    public string $address;
    /**
     * Additional Sender address information.
     */
    public string $address_2;
    /**
     * The city of the Sender.
     */
    public string $city;
    /**
     * The country of the Sender.
     */
    public string $country;
    /**
     * The time the Sender was created.
     */
    public int $created_at;
    public \SendGridSDK\DTOs\Sender\FromDTO $from;
    /**
     * The unique identifier of the Sender.
     */
    public int $id;
    /**
     * A boolean flag that is `true` when the Sender is associated with a campaign in Draft, Scheduled, or In Progress status. You cannot update or delete a locked Sender.
     */
    public bool $locked;
    /**
     * A nickname for the Sender. Not used for sending.
     */
    public string $nickname;
    public \SendGridSDK\DTOs\Sender\ReplyToDTO $reply_to;
    /**
     * The state of the Sender.
     */
    public string $state;
    /**
     * The time the Sender was last updated.
     */
    public int $updated_at;
    /**
     * A boolean flag indicating whether the Sender is verified or not. Only verified Senders can be used to send email.
     */
    public bool $verified;
    /**
     * The zipcode of the Sender.
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
