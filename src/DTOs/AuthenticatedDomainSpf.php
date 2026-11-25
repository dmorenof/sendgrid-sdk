<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs;

/**
 * Domain Authentication
 */
final class AuthenticatedDomainSpf extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'automatic_security',
        'custom_spf',
        'default_',
        'dns',
        'domain',
        'id',
        'ips',
        'legacy',
        'user_id',
        'username',
        'valid',
    ];

    protected const array PROPERTY_MAP = [
        'default' => 'default_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'default_' => 'default',
    ];

    /**
     * Indicates if this authenticated domain uses automated security.
     */
    public bool $automatic_security;
    /**
     * Indicates if this authenticated domain uses custom SPF.
     */
    public bool $custom_spf;
    /**
     * Indicates if this is the default domain.
     */
    public bool $default_;
    /**
     * The DNS records for this authenticated domain.
     */
    public \SendGridSDK\DTOs\AuthenticatedDomainSpf\DnsDTO $dns;
    /**
     * The domain authenticated.
     */
    public string $domain;
    /**
     * The ID of the authenticated domain.
     */
    public int $id;
    /**
     * The IP addresses that are included in the SPF record for this authenticated domain.
     *
     * @var list<mixed>
     */
    public array $ips;
    /**
     * Indicates if this authenticated domain was created using the legacy whitelabel tool. If it is a legacy whitelabel, it will still function, but you'll need to create a new authenticated domain if you need to update it.
     */
    public bool $legacy;
    /**
     * The subdomain that was used to create this authenticated domain.
     */
    public string $subdomain;
    /**
     * The user_id of the account that this authenticated domain is associated with.
     */
    public int $user_id;
    /**
     * The username of the account that this authenticated domain is associated with.
     */
    public string $username;
    /**
     * Indicates if this is a valid authenticated domain .
     */
    public bool $valid;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'automatic_security' => is_bool($value) ? $this->automatic_security = $value : parent::assignMember($name, $value),
            'custom_spf' => is_bool($value) ? $this->custom_spf = $value : parent::assignMember($name, $value),
            'default' => is_bool($value) ? $this->default_ = $value : parent::assignMember($name, $value),
            'domain' => is_string($value) ? $this->domain = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'legacy' => is_bool($value) ? $this->legacy = $value : parent::assignMember($name, $value),
            'subdomain' => is_string($value) ? $this->subdomain = $value : parent::assignMember($name, $value),
            'user_id' => is_int($value) ? $this->user_id = $value : parent::assignMember($name, $value),
            'username' => is_string($value) ? $this->username = $value : parent::assignMember($name, $value),
            'valid' => is_bool($value) ? $this->valid = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
