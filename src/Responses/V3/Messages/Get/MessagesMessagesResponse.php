<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Messages\Get;

/**
 * Abbv. Message
 * Example: {"from_email":"from&#64;test.com","msg_id":"abc123","subject":"anim Duis sint veniam","to_email":"test&#64;test.com","status":"processed","opens_count":1,"clicks_count":2,"last_event_time":"2017-10-13T18:56:21Z"}
 */
final class MessagesMessagesResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'clicks_count',
        'from_email',
        'last_event_time',
        'msg_id',
        'opens_count',
        'status',
        'subject',
        'to_email',
    ];

    public int $clicks_count;
    public string $from_email;
    /**
     * iso 8601 format
     */
    public string $last_event_time;
    public string $msg_id;
    public int $opens_count;
    public \SendGridSDK\Enums\Email\ActivityStatus $status;
    public string $subject;
    public string $to_email;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'clicks_count' => is_int($value) ? $this->clicks_count = $value : parent::assignMember($name, $value),
            'from_email' => is_string($value) ? $this->from_email = $value : parent::assignMember($name, $value),
            'last_event_time' => is_string($value) ? $this->last_event_time = $value : parent::assignMember($name, $value),
            'msg_id' => is_string($value) ? $this->msg_id = $value : parent::assignMember($name, $value),
            'opens_count' => is_int($value) ? $this->opens_count = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \SendGridSDK\Enums\Email\ActivityStatus::from($value) : parent::assignMember($name, $value),
            'subject' => is_string($value) ? $this->subject = $value : parent::assignMember($name, $value),
            'to_email' => is_string($value) ? $this->to_email = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
