<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Email;

/**
 * Email Activity Response Common Fields
 */
final class ActivityResponseBaseProps extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The 'From' email address used to deliver the message. This address should be a verified sender in your Twilio SendGrid account.
     * Format: email
     */
    public string $from_email;
    /**
     * A unique ID assigned to the message. This ID can be used to retrieve activity data for the specific message.
     */
    public string $msg_id;
    /**
     * The message's status.
     */
    public \SendGridSDK\Enums\Email\ActivityStatus3 $status;
    /**
     * The email's subject line.
     */
    public string $subject;
    /**
     * The intended recipient's email address.
     * Format: email
     */
    public string $to_email;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'from_email' => is_string($value) ? $this->from_email = $value : parent::assignMember($name, $value),
            'msg_id' => is_string($value) ? $this->msg_id = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \SendGridSDK\Enums\Email\ActivityStatus3::from($value) : parent::assignMember($name, $value),
            'subject' => is_string($value) ? $this->subject = $value : parent::assignMember($name, $value),
            'to_email' => is_string($value) ? $this->to_email = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
