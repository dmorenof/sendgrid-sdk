<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Partners\Accounts\ByAccountID\Ips\Get;

final class IpsResultResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'ip',
        'region',
    ];

    /**
     * IP address
     * Format: ipv4
     */
    public string $ip;
    /**
     * Region associated with the IP
     */
    public \SendGridSDK\Enums\Ip\ProvisioningRegion $region;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ip' => is_string($value) ? $this->ip = $value : parent::assignMember($name, $value),
            'region' => is_string($value) ? $this->region = \SendGridSDK\Enums\Ip\ProvisioningRegion::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
