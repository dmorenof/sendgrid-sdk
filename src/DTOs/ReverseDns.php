<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs;

/**
 * Reverse DNS
 * Example: {"id":1,"ip":"192.168.1.1","rdns":"o1.email.example.com","users":[{"username":"john&#64;example.com","user_id":7},{"username":"jane&#64;example.com","user_id":8}],"subdomain":"email","domain":"example.com","valid":true,"legacy":false,"a_record":{"valid":true,"type":"a","host":"o1.email.example.com","data":"192.168.1.1"}}
 */
final class ReverseDns extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'a_record',
        'domain',
        'id',
        'ip',
        'legacy',
        'rdns',
        'users',
        'valid',
    ];

    public \SendGridSDK\DTOs\ReverseDns\ARecordDTO $a_record;
    /**
     * The root, or sending, domain.
     */
    public string $domain;
    /**
     * The ID of the Reverse DNS.
     */
    public int $id;
    /**
     * The IP address that this Reverse DNS was created for.
     */
    public string $ip;
    /**
     * A Unix epoch timestamp representing the last time of a validation attempt.
     */
    public int $last_validation_attempt_at;
    /**
     * Indicates if this Reverse DNS was created using the legacy whitelabel tool. If it is a legacy whitelabel, it will still function, but you'll need to create a new Reverse DNS if you need to update it.
     */
    public bool $legacy;
    /**
     * The reverse DNS record for the IP address. This points to the Reverse DNS subdomain.
     */
    public string $rdns;
    /**
     * The subdomain created for this reverse DNS. This is where the rDNS record points.
     */
    public string $subdomain;
    /**
     * The users who are able to send mail from the IP address.
     */
    public \SendGridSDK\Collections\ReverseDns\UsersCollection $users;
    /**
     * Indicates if this is a valid Reverse DNS.
     */
    public bool $valid;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'domain' => is_string($value) ? $this->domain = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'ip' => is_string($value) ? $this->ip = $value : parent::assignMember($name, $value),
            'last_validation_attempt_at' => is_int($value) ? $this->last_validation_attempt_at = $value : parent::assignMember($name, $value),
            'legacy' => is_bool($value) ? $this->legacy = $value : parent::assignMember($name, $value),
            'rdns' => is_string($value) ? $this->rdns = $value : parent::assignMember($name, $value),
            'subdomain' => is_string($value) ? $this->subdomain = $value : parent::assignMember($name, $value),
            'valid' => is_bool($value) ? $this->valid = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
