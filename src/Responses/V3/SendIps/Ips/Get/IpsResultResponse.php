<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\SendIps\Ips\Get;

final class IpsResultResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * A timestamp representing when the IP address was added to your account.
     */
    public int $added_at;
    /**
     * An IP address on your account.
     */
    public string $ip;
    /**
     * Indicates if the IP address is set to automatically [warmup](https://docs.sendgrid.com/ui/sending-email/warming-up-an-ip-address).
     */
    public bool $is_auto_warmup;
    /**
     * Indicates if the IP address is billed and able to send email. This parameter applies to non-Twilio SendGrid APIs that been added to your Twilio SendGrid account. This parameter's value is `null` for Twilio SendGrid IP addresses.
     */
    public ?bool $is_enabled;
    /**
     * Indicates whether an IP address is leased from Twilio SendGrid. If `false`, the IP address is not a Twilio SendGrid IP; it is a customer's own IP that has been added to their Twilio SendGrid account.
     */
    public bool $is_leased;
    /**
     * Indicates if a parent on the account is able to send email from the IP address. This parameter will be returned only if the request was made by the parent account.
     */
    public ?bool $is_parent_assigned;
    /**
     * An array of IP Pools the IP address is assigned to.
     */
    public \SendGridSDK\Collections\V3\SendIps\Ips\Get\ResultItem\ResultItemPoolsCollection $pools;
    /**
     * The region to which the IP address is assigned. This property will only be returned if the `include_region` query parameter is included and set to `true` as part of the API request.
     */
    public \SendGridSDK\Enums\Ip\AddressManagementRegion $region;
    /**
     * A timestamp indicating when the IP was last updated.
     */
    public ?int $updated_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'added_at' => is_int($value) ? $this->added_at = $value : parent::assignMember($name, $value),
            'ip' => is_string($value) ? $this->ip = $value : parent::assignMember($name, $value),
            'is_auto_warmup' => is_bool($value) ? $this->is_auto_warmup = $value : parent::assignMember($name, $value),
            'is_enabled' => $value === null || is_bool($value) ? $this->is_enabled = $value : parent::assignMember($name, $value),
            'is_leased' => is_bool($value) ? $this->is_leased = $value : parent::assignMember($name, $value),
            'is_parent_assigned' => $value === null || is_bool($value) ? $this->is_parent_assigned = $value : parent::assignMember($name, $value),
            'region' => is_string($value) ? $this->region = \SendGridSDK\Enums\Ip\AddressManagementRegion::from($value) : parent::assignMember($name, $value),
            'updated_at' => $value === null || is_int($value) ? $this->updated_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
