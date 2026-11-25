<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs;

/**
 * unsubscribe
 */
final class UnsubscribeEvent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'date',
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
     * A date in the format YYYY-MM-DD, after converting the timestamp to the customer's timezone.
     *
     */
    public string $date;
    /**
     * Recipient email address.
     *
     */
    public string $email;
    public \SendGridSDK\Enums\Event11 $event;
    /**
     * IPv4 or IPv6 address
     */
    public string $ip;
    public string $reseller_id;
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
    /**
     * User agent of the request that triggered the event
     */
    public string $useragent;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'category' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->category = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'date' => is_string($value) ? $this->date = $value : parent::assignMember($name, $value),
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'event' => is_string($value) ? $this->event = \SendGridSDK\Enums\Event11::from($value) : parent::assignMember($name, $value),
            'ip' => is_string($value) ? $this->ip = $value : parent::assignMember($name, $value),
            'reseller_id' => is_string($value) ? $this->reseller_id = $value : parent::assignMember($name, $value),
            'sg_event_id' => is_string($value) ? $this->sg_event_id = $value : parent::assignMember($name, $value),
            'sg_message_id' => is_string($value) ? $this->sg_message_id = $value : parent::assignMember($name, $value),
            'timestamp' => is_int($value) ? $this->timestamp = $value : parent::assignMember($name, $value),
            'useragent' => is_string($value) ? $this->useragent = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
