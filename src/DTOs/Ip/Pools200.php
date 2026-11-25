<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Ip;

/**
 * IP Pools: Pool Resp
 * Example: {"name":"sunt sint enim"}
 */
final class Pools200 extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The name of the IP pool.
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
