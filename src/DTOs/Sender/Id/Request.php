<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Sender\Id;

/**
 * Sender ID Request
 * Example: {"nickname":"My Sender ID","from":{"email":"from&#64;example.com","name":"Example INC"},"reply_to":{"email":"replyto&#64;example.com","name":"Example INC"},"address":"123 Elm St.","address_2":"Apt. 456","city":"Denver","state":"Colorado","zip":"80202","country":"United States"}
 */
final class Request extends \Dmorenof\SdkRuntime\DTO
{
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
    public \SendGridSDK\DTOs\Sender\Id\Request\FromDTO $from;
    /**
     * A nickname for the sender identity. Not used for sending.
     */
    public string $nickname;
    public \SendGridSDK\DTOs\Sender\Id\Request\ReplyToDTO $reply_to;
    /**
     * The state of the sender identity.
     */
    public string $state;
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
            'nickname' => is_string($value) ? $this->nickname = $value : parent::assignMember($name, $value),
            'state' => is_string($value) ? $this->state = $value : parent::assignMember($name, $value),
            'zip' => is_string($value) ? $this->zip = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
