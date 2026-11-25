<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs;

/**
 * spamreport
 */
final class SpamReportEvent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'email',
        'event',
        'sg_event_id',
        'sg_message_id',
        'timestamp',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Message categories
     */
    public \SendGridSDK\Collections\StringCollection $category;
    public \SendGridSDK\DTOs\Custom\Args $custom_args;
    /**
     * Recipient email address.
     *
     */
    public string $email;
    public \SendGridSDK\Enums\Event8 $event;
    /**
     * SendGrid Event ID, a string that uniquely identifies the event
     */
    public string $sg_event_id;
    /**
     * SendGrid Message ID, a string that uniquely identifies the message
     */
    public string $sg_message_id;
    /**
     * Unix timestamp
     */
    public int $timestamp;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'category' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->category = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'event' => is_string($value) ? $this->event = \SendGridSDK\Enums\Event8::from($value) : parent::assignMember($name, $value),
            'sg_event_id' => is_string($value) ? $this->sg_event_id = $value : parent::assignMember($name, $value),
            'sg_message_id' => is_string($value) ? $this->sg_message_id = $value : parent::assignMember($name, $value),
            'timestamp' => is_int($value) ? $this->timestamp = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
