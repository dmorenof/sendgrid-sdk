<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Partners\Accounts\ByAccountID\Ips;

/**
 * AddAccountIPsRequest
 *
 * Request to add IP addresses to an account. Maximum of 10 IPs per request, all from the same region.
 */
final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'count',
        'region',
    ];

    protected const array VALIDATION = [
        'count' => [
            'minimum' => 1,
            'maximum' => 10,
        ],
    ];

    /**
     * Number of IPs to add (maximum 10 per request)
     * Format: int64
     */
    public int $count {
        set {
            $this->assigning('count', $value);
            $this->count = $value;
        }
    }
    /**
     * The region where the IPs should be provisioned (all IPs in a single request must be from the same region)
     */
    public \SendGridSDK\Enums\Ip\ProvisioningRegion1 $region;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'count' => is_int($value) ? $this->count = $value : parent::assignMember($name, $value),
            'region' => is_string($value) ? $this->region = \SendGridSDK\Enums\Ip\ProvisioningRegion1::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
