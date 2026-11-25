<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\SendIps\Pools\ByPoolid\Ips\Get;

final class IpsResultResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * An IP address assigned to the IP Pool.
     */
    public string $ip;
    /**
     * IP Pools the IP address is assigned to.
     */
    public \SendGridSDK\Collections\V3\SendIps\Pools\ByPoolid\Ips\Get\ResultItem\ResultItemPoolsCollection $pools;
    /**
     * The region to which the IP address is assigned. This property will only be returned if the `include_region` query parameter is included and set to `true` as part of the API request.
     */
    public \SendGridSDK\Enums\Region6 $region;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ip' => is_string($value) ? $this->ip = $value : parent::assignMember($name, $value),
            'region' => is_string($value) ? $this->region = \SendGridSDK\Enums\Region6::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
