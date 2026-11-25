<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\SendIps\Ips;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'is_auto_warmup',
        'is_parent_assigned',
    ];

    protected const array VALIDATION = [
        'subusers' => [
            'maxItems' => 100,
        ],
    ];

    /**
     * Boolean indicating whether or not to return the IP address's region information in the response.
     */
    public bool $include_region;
    /**
     * Indicates if the IP address is set to automatically [warmup](https://docs.sendgrid.com/ui/sending-email/warming-up-an-ip-address).
     */
    public bool $is_auto_warmup;
    /**
     * Indicates if a parent on the account is able to send email from the IP address.
     */
    public bool $is_parent_assigned;
    /**
     * The region to which the IP address is assigned. This property will only be returned if the `include_region` query parameter is included and set to `true` as part of the API request.
     */
    public \SendGridSDK\Enums\Ip\AddressManagementRegion3 $region;
    /**
     * An array of Subuser IDs the IP address will be assigned to.
     */
    public \SendGridSDK\Collections\StringCollection $subusers {
        set {
            $this->assigning('subusers', $value);
            $this->subusers = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'include_region' => is_bool($value) ? $this->include_region = $value : parent::assignMember($name, $value),
            'is_auto_warmup' => is_bool($value) ? $this->is_auto_warmup = $value : parent::assignMember($name, $value),
            'is_parent_assigned' => is_bool($value) ? $this->is_parent_assigned = $value : parent::assignMember($name, $value),
            'region' => is_string($value) ? $this->region = \SendGridSDK\Enums\Ip\AddressManagementRegion3::from($value) : parent::assignMember($name, $value),
            'subusers' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->subusers = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
