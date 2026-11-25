<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\User\ScheduledSends;

/**
 * Cancel or pause a scheduled send request
 * Example: {"batch_id":"YOUR_BATCH_ID","status":"pause"}
 */
final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'batch_id',
        'status',
    ];

    protected const array VALIDATION = [
        'batch_id' => [
            'pattern' => '^[a-zA-Z0-9]',
        ],
    ];

    /**
     * The batch ID is the identifier that your scheduled mail sends share.
     */
    public string $batch_id {
        set {
            $this->assigning('batch_id', $value);
            $this->batch_id = $value;
        }
    }
    /**
     * The status of the send you would like to implement. This can be pause or cancel. To delete a pause or cancel status see DELETE /v3/user/scheduled_sends/{batch_id}
     */
    public \SendGridSDK\Enums\ScheduledSends\Status $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'batch_id' => is_string($value) ? $this->batch_id = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \SendGridSDK\Enums\ScheduledSends\Status::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
