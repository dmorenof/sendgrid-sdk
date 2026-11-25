<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\AccessSettings\Whitelist\Post;

final class WhitelistIpsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'ip',
    ];

    /**
     * An IP address that you want to allow.
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
