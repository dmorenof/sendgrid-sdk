<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs;

/**
 * User Scheduled Send status
 * Example: {"batch_id":"HkJ5yLYULb7Rj8GKSx7u025ouWVlMgAi","status":"pause"}
 */
final class ScheduledSendStatus extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'batch_id',
        'status',
    ];

    protected const array VALIDATION = [
        'batch_id' => [
            'pattern' => '^[a-zA-Z0-9\\-\\_]',
        ],
    ];

    public string $batch_id {
        set {
            $this->assigning('batch_id', $value);
            $this->batch_id = $value;
        }
    }
    /**
     * The status of the scheduled send.
     */
    public \SendGridSDK\Enums\ScheduledSends\Status2 $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'batch_id' => is_string($value) ? $this->batch_id = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \SendGridSDK\Enums\ScheduledSends\Status2::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
