<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\User\ScheduledSends\ByBatchId;

/**
 * Example: {"status":"pause"}
 */
final class Patch extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'status',
    ];

    /**
     * The status you would like the scheduled send to have.
     */
    public \SendGridSDK\Enums\ScheduledSends\Status1 $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'status' => is_string($value) ? $this->status = \SendGridSDK\Enums\ScheduledSends\Status1::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
