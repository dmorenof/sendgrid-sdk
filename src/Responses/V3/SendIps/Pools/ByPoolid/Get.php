<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\SendIps\Pools\ByPoolid;

final class Get extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The unique ID of the IP Pool.
     */
    public string $id;
    /**
     * The total number of IP addresses by region. this object is only returned if the `include_region` parameter is included and set to `true` in the API request.
     */
    public \SendGridSDK\Collections\V3\SendIps\Pools\ByPoolid\Get\ByRegionCollection $ip_count_by_region;
    /**
     * A sample list of IP addresses associated with the IP Pool. The sample is limited to 10 results.
     */
    public \SendGridSDK\Collections\StringCollection $ips_preview;
    /**
     * The name of the IP Pool.
     */
    public string $name;
    /**
     * The total number of IP addresses in the IP Pool. An IP Pool can have a maximum of 100 associated IP addresses.
     */
    public int $total_ip_count;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'ips_preview' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->ips_preview = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'total_ip_count' => is_int($value) ? $this->total_ip_count = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
