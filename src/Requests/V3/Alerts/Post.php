<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Alerts;

/**
 * Example: {"type":"stats_notification","email_to":"example&#64;example.com","frequency":"daily"}
 */
final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'email_to',
        'type',
    ];

    /**
     * The email address the alert will be sent to.
     * Example: test&#64;example.com
     * Format: email
     */
    public ?string $email_to;
    /**
     * Required for stats_notification. How frequently the alert will be sent.
     * Example: daily
     */
    public string $frequency;
    /**
     * Required for usage_limit. When this usage threshold is reached, the alert will be sent.
     * Example: 90
     */
    public int $percentage;
    /**
     * The type of alert you want to create. Can be either usage_limit or stats_notification.
     * Example: usage_limit
     */
    public \SendGridSDK\Enums\Alerts\Type $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'email_to' => $value === null || is_string($value) ? $this->email_to = $value : parent::assignMember($name, $value),
            'frequency' => is_string($value) ? $this->frequency = $value : parent::assignMember($name, $value),
            'percentage' => is_int($value) ? $this->percentage = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \SendGridSDK\Enums\Alerts\Type::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
