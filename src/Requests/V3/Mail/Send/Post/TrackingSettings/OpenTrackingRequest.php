<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Mail\Send\Post\TrackingSettings;

/**
 * Allows you to track if the email was opened by including a single transparent pixel image in the body of the message content. When the message is opened, a request for the pixel is sent. That request indicates to Twilio SendGrid that the message was opened.
 */
final class OpenTrackingRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Indicates if this setting is enabled.
     */
    public bool $enable;
    /**
     * Allows you to specify a substitution tag that you can insert in the body of your email at a location that you desire. This tag will be replaced by the open tracking pixel.
     */
    public string $substitution_tag;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enable' => is_bool($value) ? $this->enable = $value : parent::assignMember($name, $value),
            'substitution_tag' => is_string($value) ? $this->substitution_tag = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
