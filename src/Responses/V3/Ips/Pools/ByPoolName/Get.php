<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Ips\Pools\ByPoolName;

final class Get extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'pool_name' => [
            'maxLength' => 64,
        ],
    ];

    /**
     * The IP addresses that belong to this pool.
     */
    public \SendGridSDK\Collections\StringCollection $ips;
    /**
     * The name of the IP pool.
     */
    public string $pool_name {
        set {
            $this->assigning('pool_name', $value);
            $this->pool_name = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ips' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->ips = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'pool_name' => is_string($value) ? $this->pool_name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
