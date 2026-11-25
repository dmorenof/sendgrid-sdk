<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs;

/**
 * received
 */
final class ReceivedEvent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'client_ip',
        'event',
        'protocol',
        'recipient_count',
        'recv_msgid',
        'sg_event_id',
        'size',
        'timestamp',
    ];

    protected const array VALIDATION = [
        'api_key_id' => [
            'maxLength' => 50,
            'pattern' => '^$|^[A-Za-z0-9_-]+$',
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * The ID of the API Key used to authenticate the sending request for the message.
     */
    public string $api_key_id {
        set {
            $this->assigning('api_key_id', $value);
            $this->api_key_id = $value;
        }
    }
    public string $api_version;
    /**
     * IPv4 or IPv6 address.
     * Example: "192.168.1.1"
     */
    public string $client_ip;
    public \SendGridSDK\Enums\Event7 $event;
    /**
     * Example: "HTTP"
     */
    public string $protocol;
    /**
     * Number of recipients.
     */
    public int $recipient_count;
    /**
     * Received Message ID, a string that uniquely identifies the mail send request
     */
    public string $recv_msgid;
    public string $reseller_id;
    /**
     * SendGrid Event ID, a string that uniquely identifies the event
     */
    public string $sg_event_id;
    /**
     * Size of the email in bytes.
     */
    public int $size;
    /**
     * Unix timestamp
     */
    public int $timestamp;
    /**
     * User agent of the request that triggered the event
     */
    public string $useragent;
    /**
     * Key-value pairs associated with the payload.
     */
    public \SendGridSDK\DTOs\ReceivedEvent\PayloadDetailsMap $v3_payload_details;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'api_key_id' => is_string($value) ? $this->api_key_id = $value : parent::assignMember($name, $value),
            'api_version' => is_string($value) ? $this->api_version = $value : parent::assignMember($name, $value),
            'client_ip' => is_string($value) ? $this->client_ip = $value : parent::assignMember($name, $value),
            'event' => is_string($value) ? $this->event = \SendGridSDK\Enums\Event7::from($value) : parent::assignMember($name, $value),
            'protocol' => is_string($value) ? $this->protocol = $value : parent::assignMember($name, $value),
            'recipient_count' => is_int($value) ? $this->recipient_count = $value : parent::assignMember($name, $value),
            'recv_msgid' => is_string($value) ? $this->recv_msgid = $value : parent::assignMember($name, $value),
            'reseller_id' => is_string($value) ? $this->reseller_id = $value : parent::assignMember($name, $value),
            'sg_event_id' => is_string($value) ? $this->sg_event_id = $value : parent::assignMember($name, $value),
            'size' => is_int($value) ? $this->size = $value : parent::assignMember($name, $value),
            'timestamp' => is_int($value) ? $this->timestamp = $value : parent::assignMember($name, $value),
            'useragent' => is_string($value) ? $this->useragent = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
