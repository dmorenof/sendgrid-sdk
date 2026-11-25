<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Alerts\ByAlertId;

/**
 * Example: {"email_to":"example&#64;example.com"}
 */
final class Patch extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The new email address you want your alert to be sent to.
     * Example: test&#64;example.com
     */
    public string $email_to;
    /**
     * The new frequency at which to send the stats_notification alert.
     * Example: monthly
     */
    public string $frequency;
    /**
     * The new percentage threshold at which the usage_limit alert will be sent.
     * Example: 90
     */
    public int $percentage;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'email_to' => is_string($value) ? $this->email_to = $value : parent::assignMember($name, $value),
            'frequency' => is_string($value) ? $this->frequency = $value : parent::assignMember($name, $value),
            'percentage' => is_int($value) ? $this->percentage = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
