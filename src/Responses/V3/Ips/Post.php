<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Ips;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'ips',
        'remaining_ips',
        'warmup',
    ];

    /**
     * List of IP objects.
     */
    public \SendGridSDK\Collections\V3\Ips\Post\IpsIpsCollection $ips;
    /**
     * The number of IPs that can still be added to the user.
     */
    public int $remaining_ips;
    /**
     * Whether or not the IPs are being warmed up.
     */
    public bool $warmup;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'remaining_ips' => is_int($value) ? $this->remaining_ips = $value : parent::assignMember($name, $value),
            'warmup' => is_bool($value) ? $this->warmup = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
