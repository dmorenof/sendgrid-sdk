<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Email\LogsGetMessageById;

/**
 * Detailed information for the specified message, including all events related to the message.
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'api_key_id',
        'client_ip',
        'events',
        'from_email',
        'sg_message_id',
        'status',
        'subject',
        'to_email',
    ];

    protected const array VALIDATION = [
        'api_key_id' => [
            'maxLength' => 50,
            'pattern' => '^$|^[A-Za-z0-9_-]+',
        ],
        'events' => [
            'maxItems' => 100,
        ],
        'teammate' => [
            'maxLength' => 64,
            'pattern' => '^$|^[A-Za-z0-9]+',
        ],
    ];

    /**
     * The ID of the API Key used to authenticate the sending request for the message.
     */
    public string $api_key_id {
        set {
            $this->assigning('api_key_id', $value);
            $this->api_key_id = $value;
        }
    }
    /**
     * The unsubscribe group associated with this email.
     */
    public int $asm_group_id;
    /**
     * The categories associated with the message.
     */
    public \SendGridSDK\Collections\StringCollection $category;
    /**
     * The IP address of the user who sent the message.
     */
    public string $client_ip;
    /**
     * Custom key-value pairs associated with the message.
     */
    public \SendGridSDK\DTOs\Email\LogsGetMessageById\Response\CustomArgsMap $custom_args;
    /**
     * All events recorded for this message. Most recent events will be returned upto the maximum of 100 events.
     */
    public \SendGridSDK\Collections\Email\LogsGetMessageById\Response\EventsCollection $events {
        set {
            $this->assigning('events', $value);
            $this->events = $value;
        }
    }
    /**
     * The 'From' email address used to deliver the message.
     * This may not be a valid email address.
     *
     */
    public string $from_email;
    /**
     * The ID of the marketing campaign associated with the message.
     */
    public int $marketing_campaign_id;
    /**
     * The name of the marketing campaign associated with the message.
     */
    public string $marketing_campaign_name;
    /**
     * The ID of the split associated with the marketing campaign.
     */
    public int $marketing_campaign_split_id;
    /**
     * The version of the marketing campaign associated with the message.
     */
    public string $marketing_campaign_version;
    /**
     * The IP address used to send to the remote Mail Transfer Agent.
     */
    public string $outbound_ip;
    /**
     * The type of outbound IP address used to send the message.
     * Example: "dedicated"
     */
    public string $outbound_ip_type;
    /**
     * A unique ID assigned to the message.
     */
    public string $sg_message_id;
    public \SendGridSDK\Enums\Email\LogsMessageStatus $status;
    /**
     * The email's subject line.
     */
    public string $subject;
    /**
     * Teammate's username.
     */
    public string $teammate {
        set {
            $this->assigning('teammate', $value);
            $this->teammate = $value;
        }
    }
    /**
     * The ID associated with a Twilio SendGrid email template used to format the message.
     */
    public string $template_id;
    /**
     * The intended recipient's email address.
     */
    public string $to_email;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'api_key_id' => is_string($value) ? $this->api_key_id = $value : parent::assignMember($name, $value),
            'asm_group_id' => is_int($value) ? $this->asm_group_id = $value : parent::assignMember($name, $value),
            'category' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->category = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'client_ip' => is_string($value) ? $this->client_ip = $value : parent::assignMember($name, $value),
            'from_email' => is_string($value) ? $this->from_email = $value : parent::assignMember($name, $value),
            'marketing_campaign_id' => is_int($value) ? $this->marketing_campaign_id = $value : parent::assignMember($name, $value),
            'marketing_campaign_name' => is_string($value) ? $this->marketing_campaign_name = $value : parent::assignMember($name, $value),
            'marketing_campaign_split_id' => is_int($value) ? $this->marketing_campaign_split_id = $value : parent::assignMember($name, $value),
            'marketing_campaign_version' => is_string($value) ? $this->marketing_campaign_version = $value : parent::assignMember($name, $value),
            'outbound_ip' => is_string($value) ? $this->outbound_ip = $value : parent::assignMember($name, $value),
            'outbound_ip_type' => is_string($value) ? $this->outbound_ip_type = $value : parent::assignMember($name, $value),
            'sg_message_id' => is_string($value) ? $this->sg_message_id = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \SendGridSDK\Enums\Email\LogsMessageStatus::from($value) : parent::assignMember($name, $value),
            'subject' => is_string($value) ? $this->subject = $value : parent::assignMember($name, $value),
            'teammate' => is_string($value) ? $this->teammate = $value : parent::assignMember($name, $value),
            'template_id' => is_string($value) ? $this->template_id = $value : parent::assignMember($name, $value),
            'to_email' => is_string($value) ? $this->to_email = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
