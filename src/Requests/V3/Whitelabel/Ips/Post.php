<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Whitelabel\Ips;

/**
 * Example: {"ip":"192.168.1.1","subdomain":"email","domain":"example.com"}
 */
final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'domain',
        'ip',
    ];

    /**
     * The root, or sending, domain that will be used to send message from the IP address.
     */
    public string $domain;
    /**
     * The IP address for which you want to set up reverse DNS.
     */
    public string $ip;
    /**
     * The subdomain that will be used to send emails from the IP address. This should be the same as the subdomain used to set up an authenticated domain.
     */
    public string $subdomain;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'domain' => is_string($value) ? $this->domain = $value : parent::assignMember($name, $value),
            'ip' => is_string($value) ? $this->ip = $value : parent::assignMember($name, $value),
            'subdomain' => is_string($value) ? $this->subdomain = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
