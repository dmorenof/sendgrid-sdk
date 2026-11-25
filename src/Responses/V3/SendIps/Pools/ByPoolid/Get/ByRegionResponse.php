<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\SendIps\Pools\ByPoolid\Get;

final class ByRegionResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The number of IP addresses in the pool that are assigned to the region specified in the `region` property for this count.
     */
    public int $count;
    /**
     * The region associated with the number of IPs listed in the `count` property.
     */
    public \SendGridSDK\Enums\Region5 $region;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'count' => is_int($value) ? $this->count = $value : parent::assignMember($name, $value),
            'region' => is_string($value) ? $this->region = \SendGridSDK\Enums\Region5::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
