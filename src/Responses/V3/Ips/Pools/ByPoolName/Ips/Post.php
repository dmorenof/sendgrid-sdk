<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Ips\Pools\ByPoolName\Ips;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'ip',
        'pools',
        'start_date',
        'warmup',
    ];

    /**
     * The IP address.
     */
    public string $ip;
    /**
     * The IP pools that this IP address has been added to.
     */
    public \SendGridSDK\Collections\StringCollection $pools;
    /**
     * A Unix timestamp indicating when the warmup process began for the added IP address.
     */
    public int $start_date;
    /**
     * Indicates if the IP address is in warmup.
     */
    public bool $warmup;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ip' => is_string($value) ? $this->ip = $value : parent::assignMember($name, $value),
            'pools' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->pools = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'start_date' => is_int($value) ? $this->start_date = $value : parent::assignMember($name, $value),
            'warmup' => is_bool($value) ? $this->warmup = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
