<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\SendIps\Ips;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The IP address that was added to your account.
     */
    public string $ip;
    /**
     * Indicates if the IP address is set to automatically [warmup](https://docs.sendgrid.com/ui/sending-email/warming-up-an-ip-address).  This parameter is returned only if the IP address is set to automatically warm up.
     */
    public bool $is_auto_warmup;
    /**
     * Indicates if a parent on the account is able to send email from the IP address.
     */
    public bool $is_parent_assigned;
    /**
     * The region to which the IP address is assigned. This property will only be returned if the `include_region` query parameter is included and set to `true` as part of the API request.
     */
    public \SendGridSDK\Enums\Ip\AddressManagementRegion2 $region;
    /**
     * An array of Subuser IDs the IP address was assigned to.
     */
    public \SendGridSDK\Collections\StringCollection $subusers;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ip' => is_string($value) ? $this->ip = $value : parent::assignMember($name, $value),
            'is_auto_warmup' => is_bool($value) ? $this->is_auto_warmup = $value : parent::assignMember($name, $value),
            'is_parent_assigned' => is_bool($value) ? $this->is_parent_assigned = $value : parent::assignMember($name, $value),
            'region' => is_string($value) ? $this->region = \SendGridSDK\Enums\Ip\AddressManagementRegion2::from($value) : parent::assignMember($name, $value),
            'subusers' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->subusers = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
