<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs;

/**
 * dropped
 */
final class DroppedEvent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'email',
        'event',
        'reason',
        'sg_event_id',
        'sg_message_id',
        'smtpId',
        'timestamp',
    ];

    protected const array PROPERTY_MAP = [
        'smtp-id' => 'smtpId',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'smtpId' => 'smtp-id',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * The ID of the ASM (Advanced Suppression Manager) group associated with the message
     */
    public int $asm_group_id;
    /**
     * Message categories
     */
    public \SendGridSDK\Collections\StringCollection $category;
    public \SendGridSDK\DTOs\Custom\Args $custom_args;
    /**
     * Recipient email address.
     * This field may be empty in some `drop` events.
     *
     */
    public string $email;
    public \SendGridSDK\Enums\Event4 $event;
    /**
     * A detailed error message indicating why the email was dropped.
     */
    public string $message;
    public \SendGridSDK\DTOs\OutboundIp\PoolMetadata $pool;
    /**
     * The general reason the email was dropped
     */
    public string $reason;
    /**
     * SendGrid Event ID, a string that uniquely identifies the event
     */
    public string $sg_event_id;
    /**
     * SendGrid Message ID, a string that uniquely identifies the message
     */
    public string $sg_message_id;
    /**
     * SMTP ID associated with the message
     */
    public string $smtpId;
    /**
     * Unix timestamp
     */
    public int $timestamp;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'asm_group_id' => is_int($value) ? $this->asm_group_id = $value : parent::assignMember($name, $value),
            'category' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->category = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'event' => is_string($value) ? $this->event = \SendGridSDK\Enums\Event4::from($value) : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            'pool' => $value instanceof \stdClass ? $this->pool = new \SendGridSDK\DTOs\OutboundIp\PoolMetadata($value) : parent::assignMember($name, $value),
            'reason' => is_string($value) ? $this->reason = $value : parent::assignMember($name, $value),
            'sg_event_id' => is_string($value) ? $this->sg_event_id = $value : parent::assignMember($name, $value),
            'sg_message_id' => is_string($value) ? $this->sg_message_id = $value : parent::assignMember($name, $value),
            'smtp-id' => is_string($value) ? $this->smtpId = $value : parent::assignMember($name, $value),
            'timestamp' => is_int($value) ? $this->timestamp = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
