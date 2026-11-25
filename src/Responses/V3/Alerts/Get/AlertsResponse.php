<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Alerts\Get;

final class AlertsResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'created_at',
        'email_to',
        'id',
        'type',
    ];

    /**
     * A Unix timestamp indicating when the alert was created.
     */
    public int $created_at;
    /**
     * The email address that the alert will be sent to.
     */
    public string $email_to;
    /**
     * If the alert is of type stats_notification, this indicates how frequently the stats notifications will be sent. For example, "daily", "weekly", or "monthly".
     */
    public string $frequency;
    /**
     * The ID of the alert.
     */
    public int $id;
    /**
     * If the alert is of type usage_limit, this indicates the percentage of email usage that must be reached before the alert will be sent.
     */
    public int $percentage;
    /**
     * The type of alert.
     */
    public \SendGridSDK\Enums\Alerts\Type1 $type;
    /**
     * A Unix timestamp indicating when the alert was last modified.
     */
    public int $updated_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'created_at' => is_int($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'email_to' => is_string($value) ? $this->email_to = $value : parent::assignMember($name, $value),
            'frequency' => is_string($value) ? $this->frequency = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'percentage' => is_int($value) ? $this->percentage = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \SendGridSDK\Enums\Alerts\Type1::from($value) : parent::assignMember($name, $value),
            'updated_at' => is_int($value) ? $this->updated_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
