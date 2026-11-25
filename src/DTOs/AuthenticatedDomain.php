<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs;

/**
 * Domain Authentication - Mandatory Subdomain
 * Example: {"id":45373692,"user_id":66036447,"subdomain":"sub","domain":"example.com","username":"jdoe","ips":["127.0.0.1"],"custom_spf":false,"default":true,"legacy":false,"automatic_security":true,"valid":true,"dns":{"mail_cname":{"valid":true,"type":"cname","host":"mail.example.com","data":"u7.wl.sendgrid.net"},"dkim1":{"valid":true,"type":"cname","host":"s1._domainkey.example.com","data":"s1._domainkey.u7.wl.sendgrid.net"},"dkim2":{"valid":true,"type":"cname","host":"s2._domainkey.example.com","data":"s2._domainkey.u7.wl.sendgrid.net"}}}
 */
final class AuthenticatedDomain extends \Dmorenof\SdkRuntime\DTO
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
        'subdomain',
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
     * Indicates whether this authenticated domain uses custom SPF.
     */
    public bool $custom_spf;
    /**
     * Indicates if this is the default authenticated domain.
     */
    public bool $default_;
    /**
     * The DNS records used to authenticate the sending domain.
     */
    public \SendGridSDK\DTOs\AuthenticatedDomain\DnsDTO $dns;
    /**
     * The domain to be authenticated.
     */
    public string $domain;
    /**
     * The ID of the authenticated domain.
     */
    public float $id;
    /**
     * The IPs to be included in the custom SPF record for this authenticated domain.
     */
    public \SendGridSDK\Collections\StringCollection $ips;
    /**
     * Indicates if this authenticated domain was created using the legacy whitelabel tool. If it is a legacy whitelabel, it will still function, but you'll need to create a new authenticated domain if you need to update it.
     */
    public bool $legacy;
    /**
     * The subdomain or custom return-path to use for this authenticated domain.
     */
    public string $subdomain;
    /**
     * The ID of the user that this domain is associated with.
     */
    public float $user_id;
    /**
     * The username that this domain will be associated with.
     */
    public string $username;
    /**
     * Indicates if this is a valid authenticated domain.
     */
    public bool $valid;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'automatic_security' => is_bool($value) ? $this->automatic_security = $value : parent::assignMember($name, $value),
            'custom_spf' => is_bool($value) ? $this->custom_spf = $value : parent::assignMember($name, $value),
            'default' => is_bool($value) ? $this->default_ = $value : parent::assignMember($name, $value),
            'domain' => is_string($value) ? $this->domain = $value : parent::assignMember($name, $value),
            'id' => is_float($value) ? $this->id = $value : parent::assignMember($name, $value),
            'ips' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->ips = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'legacy' => is_bool($value) ? $this->legacy = $value : parent::assignMember($name, $value),
            'subdomain' => is_string($value) ? $this->subdomain = $value : parent::assignMember($name, $value),
            'user_id' => is_float($value) ? $this->user_id = $value : parent::assignMember($name, $value),
            'username' => is_string($value) ? $this->username = $value : parent::assignMember($name, $value),
            'valid' => is_bool($value) ? $this->valid = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
