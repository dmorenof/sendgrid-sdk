<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Whitelabel\Domains\ById\Ips;

/**
 * Example: {"ip":"192.168.0.1"}
 */
final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'ip',
    ];

    /**
     * IP to associate with the domain. Used for manually specifying IPs for custom SPF.
     */
    public string $ip;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ip' => is_string($value) ? $this->ip = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
