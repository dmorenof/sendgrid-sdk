<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Partners\Accounts\ByAccountID\Ips;

/**
 * AddAccountIPsResponse
 */
final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'ips',
        'region',
    ];

    public \SendGridSDK\Collections\StringCollection $ips;
    /**
     * The region where the IP addresses are located
     */
    public \SendGridSDK\Enums\Ip\ProvisioningRegion2 $region;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ips' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->ips = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'region' => is_string($value) ? $this->region = \SendGridSDK\Enums\Ip\ProvisioningRegion2::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
