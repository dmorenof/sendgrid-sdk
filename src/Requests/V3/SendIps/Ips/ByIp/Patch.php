<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\SendIps\Ips\ByIp;

final class Patch extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Indicates if the IP address is set to automatically [warmup](https://docs.sendgrid.com/ui/sending-email/warming-up-an-ip-address).
     */
    public bool $is_auto_warmup;
    /**
     * Indicates if the IP address is billed and able to send email. This parameter applies to non-Twilio SendGrid APIs that been added to your Twilio SendGrid account. This parameter's value is `null` for Twilio SendGrid IP addresses.
     */
    public bool $is_enabled;
    /**
     * Indicates if a parent on the account is able to send email from the IP address.
     */
    public bool $is_parent_assigned;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'is_auto_warmup' => is_bool($value) ? $this->is_auto_warmup = $value : parent::assignMember($name, $value),
            'is_enabled' => is_bool($value) ? $this->is_enabled = $value : parent::assignMember($name, $value),
            'is_parent_assigned' => is_bool($value) ? $this->is_parent_assigned = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
