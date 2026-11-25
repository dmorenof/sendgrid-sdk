<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Mail\Send\Post\TrackingSettings;

/**
 * Allows you to insert a subscription management link at the bottom of the text and HTML bodies of your email. If you would like to specify the location of the link within your email, you may use the `substitution_tag` property.
 */
final class SubscriptionTrackingRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Indicates if this setting is enabled.
     */
    public bool $enable;
    /**
     * HTML to be appended to the email with the subscription tracking link.
     */
    public string $html;
    /**
     * A tag that will be replaced with the unsubscribe URL. If this property is used, it will override both the `text` and `html` properties. The URL of the link will be placed at the substitution tag's location in the message body with no additional formatting.
     */
    public string $substitution_tag;
    /**
     * Text to be appended to the email with the subscription tracking link.
     */
    public string $text;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enable' => is_bool($value) ? $this->enable = $value : parent::assignMember($name, $value),
            'html' => is_string($value) ? $this->html = $value : parent::assignMember($name, $value),
            'substitution_tag' => is_string($value) ? $this->substitution_tag = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
