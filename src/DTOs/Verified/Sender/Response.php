<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Verified\Sender;

/**
 * Verified Sender Response Schema
 * Example: {"id":1234,"nickname":"Example Orders","from_email":"orders&#64;example.com","from_name":"Example Orders","reply_to":"orders&#64;example.com","reply_to_name":"Example Orders","address":"1234 Fake St.","address2":"PO Box 1234","state":"CA","city":"San Francisco","country":"USA","zip":"94105","verified":true,"locked":false}
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public string $address;
    public string $address2;
    public string $city;
    public string $country;
    public string $from_email;
    public string $from_name;
    public int $id;
    public bool $locked;
    public string $nickname;
    public string $reply_to;
    public string $reply_to_name;
    public string $state;
    public bool $verified;
    public string $zip;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address' => is_string($value) ? $this->address = $value : parent::assignMember($name, $value),
            'address2' => is_string($value) ? $this->address2 = $value : parent::assignMember($name, $value),
            'city' => is_string($value) ? $this->city = $value : parent::assignMember($name, $value),
            'country' => is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'from_email' => is_string($value) ? $this->from_email = $value : parent::assignMember($name, $value),
            'from_name' => is_string($value) ? $this->from_name = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'locked' => is_bool($value) ? $this->locked = $value : parent::assignMember($name, $value),
            'nickname' => is_string($value) ? $this->nickname = $value : parent::assignMember($name, $value),
            'reply_to' => is_string($value) ? $this->reply_to = $value : parent::assignMember($name, $value),
            'reply_to_name' => is_string($value) ? $this->reply_to_name = $value : parent::assignMember($name, $value),
            'state' => is_string($value) ? $this->state = $value : parent::assignMember($name, $value),
            'verified' => is_bool($value) ? $this->verified = $value : parent::assignMember($name, $value),
            'zip' => is_string($value) ? $this->zip = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
