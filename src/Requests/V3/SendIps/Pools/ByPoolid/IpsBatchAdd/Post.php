<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\SendIps\Pools\ByPoolid\IpsBatchAdd;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'ips',
    ];

    /**
     * An array of IP addresses to assign to the specified IP Pool. All assignments must succeed.
     */
    public \SendGridSDK\Collections\StringCollection $ips;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ips' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->ips = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
