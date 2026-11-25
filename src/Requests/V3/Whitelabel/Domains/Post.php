<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Whitelabel\Domains;

/**
 * Example: {"domain":"example.com","subdomain":"news","username":"john&#64;example.com","ips":["192.168.1.1","192.168.1.2"],"custom_spf":true,"default":true,"automatic_security":false,"custom_dkim_selector":"string","region":"global"}
 */
final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'domain',
    ];

    protected const array PROPERTY_MAP = [
        'default' => 'default_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'default_' => 'default',
    ];

    /**
     * Whether to allow SendGrid to manage your SPF records, DKIM keys, and DKIM key rotation.
     */
    public bool $automatic_security;
    /**
     * Add a custom DKIM selector. Accepts three letters or numbers.
     */
    public string $custom_dkim_selector;
    /**
     * Specify whether to use a custom SPF or allow SendGrid to manage your SPF. This option is only available to authenticated domains set up for manual security.
     */
    public bool $custom_spf;
    /**
     * Whether to use this authenticated domain as the fallback if no authenticated domains match the sender's domain.
     */
    public bool $default_;
    /**
     * Domain being authenticated.
     */
    public string $domain;
    /**
     * The IP addresses that will be included in the custom SPF record for this authenticated domain.
     */
    public \SendGridSDK\Collections\StringCollection $ips;
    /**
     * The region of the domain. Allowed values are `global` and `eu`. The default value is `global`.
     */
    public string $region;
    /**
     * The subdomain or custom return-path to use for this authenticated domain.
     */
    public string $subdomain;
    /**
     * The username associated with this domain.
     */
    public string $username;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'automatic_security' => is_bool($value) ? $this->automatic_security = $value : parent::assignMember($name, $value),
            'custom_dkim_selector' => is_string($value) ? $this->custom_dkim_selector = $value : parent::assignMember($name, $value),
            'custom_spf' => is_bool($value) ? $this->custom_spf = $value : parent::assignMember($name, $value),
            'default' => is_bool($value) ? $this->default_ = $value : parent::assignMember($name, $value),
            'domain' => is_string($value) ? $this->domain = $value : parent::assignMember($name, $value),
            'ips' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->ips = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'region' => is_string($value) ? $this->region = $value : parent::assignMember($name, $value),
            'subdomain' => is_string($value) ? $this->subdomain = $value : parent::assignMember($name, $value),
            'username' => is_string($value) ? $this->username = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
