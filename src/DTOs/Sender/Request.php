<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Sender;

/**
 * Sender Request
 * Example: {"nickname":"Example Orders","from":{"email":"orders&#64;example.com","name":"Example Orders"},"reply_to":{"email":"support&#64;example.com","name":"Example Support"},"address":"1234 Fake St.","address_2":"","city":"San Francisco","state":"CA","zip":"94105","country":"United States"}
 */
final class Request extends \Dmorenof\SdkRuntime\DTO
{
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
    public \SendGridSDK\DTOs\Sender\Request\FromDTO $from;
    /**
     * A nickname for the Sender. Not used for sending.
     */
    public string $nickname;
    public \SendGridSDK\DTOs\Sender\Request\ReplyToDTO $reply_to;
    /**
     * The state of the Sender.
     */
    public string $state;
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
            'nickname' => is_string($value) ? $this->nickname = $value : parent::assignMember($name, $value),
            'state' => is_string($value) ? $this->state = $value : parent::assignMember($name, $value),
            'zip' => is_string($value) ? $this->zip = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
