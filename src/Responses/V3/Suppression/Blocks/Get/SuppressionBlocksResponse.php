<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Suppression\Blocks\Get;

final class SuppressionBlocksResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'created',
        'email',
        'reason',
        'status',
    ];

    /**
     * A Unix timestamp indicating when the email address was added to the blocks list.
     */
    public int $created;
    /**
     * The email address that was added to the block list.
     * Format: email
     */
    public string $email;
    /**
     * An explanation for the reason of the block.
     */
    public string $reason;
    /**
     * The status of the block.
     */
    public string $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'reason' => is_string($value) ? $this->reason = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
