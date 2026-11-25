<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs;

/**
 * deferred
 */
final class DeferredEvent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'attempt',
        'email',
        'event',
        'response',
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

    protected const array VALIDATION = [
        'attempt' => [
            'pattern' => '^[0-9]+$',
        ],
        'domain' => [
            'pattern' => '^.+\\..+$',
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * The ID of the ASM (Advanced Suppression Manager) group associated with the message
     */
    public int $asm_group_id;
    /**
     * The number of delivery attempts made for this email (zero-based counting).
     */
    public string $attempt {
        set {
            $this->assigning('attempt', $value);
            $this->attempt = $value;
        }
    }
    /**
     * Message categories
     */
    public \SendGridSDK\Collections\StringCollection $category;
    public \SendGridSDK\Enums\CertificateError $cert_err;
    public \SendGridSDK\DTOs\Custom\Args $custom_args;
    /**
     * The domain part of the recipient's email address.
     * Example: "example.com"
     */
    public string $domain {
        set {
            $this->assigning('domain', $value);
            $this->domain = $value;
        }
    }
    /**
     * Recipient email address.
     *
     */
    public string $email;
    public \SendGridSDK\Enums\Event2 $event;
    /**
     * The email address of the sender.
     * This may not always be a valid email address.
     *
     */
    public string $from;
    /**
     * IPv4 or IPv6 address
     */
    public string $ip;
    /**
     * SMTP response code and message indicating the reason the delivery succeeded or failed
     */
    public string $response;
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
    public \SendGridSDK\Enums\TlsEnabled $tls;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'asm_group_id' => is_int($value) ? $this->asm_group_id = $value : parent::assignMember($name, $value),
            'attempt' => is_string($value) ? $this->attempt = $value : parent::assignMember($name, $value),
            'category' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->category = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'cert_err' => is_string($value) ? $this->cert_err = \SendGridSDK\Enums\CertificateError::from($value) : parent::assignMember($name, $value),
            'domain' => is_string($value) ? $this->domain = $value : parent::assignMember($name, $value),
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'event' => is_string($value) ? $this->event = \SendGridSDK\Enums\Event2::from($value) : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'ip' => is_string($value) ? $this->ip = $value : parent::assignMember($name, $value),
            'response' => is_string($value) ? $this->response = $value : parent::assignMember($name, $value),
            'sg_event_id' => is_string($value) ? $this->sg_event_id = $value : parent::assignMember($name, $value),
            'sg_message_id' => is_string($value) ? $this->sg_message_id = $value : parent::assignMember($name, $value),
            'smtp-id' => is_string($value) ? $this->smtpId = $value : parent::assignMember($name, $value),
            'timestamp' => is_int($value) ? $this->timestamp = $value : parent::assignMember($name, $value),
            'tls' => is_int($value) ? $this->tls = \SendGridSDK\Enums\TlsEnabled::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
