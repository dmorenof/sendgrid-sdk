<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs;

/**
 * open
 */
final class OpenEvent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'email',
        'event',
        'sg_event_id',
        'sg_message_id',
        'timestamp',
    ];

    protected const array VALIDATION = [
        'sg_machine_open' => [
            'jsonSchema' => '{"enum":[true]}',
        ],
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
     *
     */
    public string $email;
    public \SendGridSDK\Enums\Event5 $event;
    /**
     * IPv4 or IPv6 address
     */
    public string $ip;
    public \SendGridSDK\Enums\EngagementUrlContentType $sg_content_type;
    /**
     * SendGrid Event ID, a string that uniquely identifies the event
     */
    public string $sg_event_id;
    /**
     * Indicates whether the open was detected as being performed by a machine rather than a human.
     * The field is omitted if the value would be false.
     *
     */
    public bool $sg_machine_open {
        set {
            $this->assigning('sg_machine_open', $value);
            $this->sg_machine_open = $value;
        }
    }
    /**
     * SendGrid Message ID, a string that uniquely identifies the message
     */
    public string $sg_message_id;
    /**
     * Unix timestamp
     */
    public int $timestamp;
    /**
     * Url associated with the event
     */
    public string $url;
    /**
     * User agent of the request that triggered the event
     */
    public string $useragent;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'asm_group_id' => is_int($value) ? $this->asm_group_id = $value : parent::assignMember($name, $value),
            'category' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->category = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'event' => is_string($value) ? $this->event = \SendGridSDK\Enums\Event5::from($value) : parent::assignMember($name, $value),
            'ip' => is_string($value) ? $this->ip = $value : parent::assignMember($name, $value),
            'sg_content_type' => is_string($value) ? $this->sg_content_type = \SendGridSDK\Enums\EngagementUrlContentType::from($value) : parent::assignMember($name, $value),
            'sg_event_id' => is_string($value) ? $this->sg_event_id = $value : parent::assignMember($name, $value),
            'sg_machine_open' => is_bool($value) ? $this->sg_machine_open = $value : parent::assignMember($name, $value),
            'sg_message_id' => is_string($value) ? $this->sg_message_id = $value : parent::assignMember($name, $value),
            'timestamp' => is_int($value) ? $this->timestamp = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            'useragent' => is_string($value) ? $this->useragent = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
