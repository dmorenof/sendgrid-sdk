<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Email;

/**
 * Summary information for a single message matching the filter.
 *
 */
final class LogsMessage extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'from_email',
        'sg_message_id',
        'sg_message_id_created_at',
        'status',
        'subject',
        'to_email',
    ];

    /**
     * Sender email address.
     * This may not always be a valid email address.
     *
     */
    public string $from_email;
    /**
     * Textual description for drop, bounce, deferral, or delivery event
     *
     */
    public string $reason;
    /**
     * Unique message ID.
     */
    public string $sg_message_id;
    /**
     * Timestamp when message_id was created at (ISO 8601).
     * Format: string
     */
    public string $sg_message_id_created_at;
    public \SendGridSDK\Enums\Email\LogsMessageStatus $status;
    /**
     * Email subject line.
     */
    public string $subject;
    /**
     * Recipient email address
     */
    public string $to_email;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'from_email' => is_string($value) ? $this->from_email = $value : parent::assignMember($name, $value),
            'reason' => is_string($value) ? $this->reason = $value : parent::assignMember($name, $value),
            'sg_message_id' => is_string($value) ? $this->sg_message_id = $value : parent::assignMember($name, $value),
            'sg_message_id_created_at' => is_string($value) ? $this->sg_message_id_created_at = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \SendGridSDK\Enums\Email\LogsMessageStatus::from($value) : parent::assignMember($name, $value),
            'subject' => is_string($value) ? $this->subject = $value : parent::assignMember($name, $value),
            'to_email' => is_string($value) ? $this->to_email = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
