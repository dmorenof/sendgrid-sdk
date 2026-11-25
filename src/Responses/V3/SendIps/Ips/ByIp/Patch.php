<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\SendIps\Ips\ByIp;

final class Patch extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The IP address that was updated.
     */
    public string $ip;
    /**
     * Indicates if the IP address is set to automatically [warmup](https://docs.sendgrid.com/ui/sending-email/warming-up-an-ip-address).
     */
    public bool $is_auto_warmup;
    /**
     * An array of Subuser IDs the IP address was assigned to. This parameter is returned only if the IP address is enabled.
     */
    public bool $is_enabled;
    /**
     * Indicates if a parent on the account is able to send email from the IP address. This parameter is returned only if the IP address is parent assigned.
     */
    public bool $is_parent_assigned;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ip' => is_string($value) ? $this->ip = $value : parent::assignMember($name, $value),
            'is_auto_warmup' => is_bool($value) ? $this->is_auto_warmup = $value : parent::assignMember($name, $value),
            'is_enabled' => is_bool($value) ? $this->is_enabled = $value : parent::assignMember($name, $value),
            'is_parent_assigned' => is_bool($value) ? $this->is_parent_assigned = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
