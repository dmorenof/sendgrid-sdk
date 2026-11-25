<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Ips\Pools\ByPoolName\Ips;

/**
 * Example: {"ip":"0.0.0.0"}
 */
final class Post extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The IP address that you want to add to the named pool.
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
