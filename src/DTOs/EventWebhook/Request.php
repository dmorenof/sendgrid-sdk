<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\EventWebhook;

/**
 * Create and Update Event Webhook Request Body
 */
final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'url',
    ];

    /**
     * Set this property to `true` to receive bounce events. A bounce occurs when a receiving server could not or would not accept a message.
     */
    public bool $bounce;
    /**
     * Set this property to `true` to receive click events. Click events occur when a recipient clicks on a link within the message. You must [enable Click Tracking](https://docs.sendgrid.com/ui/account-and-settings/tracking#click-tracking) to receive this type of event.
     */
    public bool $click;
    /**
     * Set this property to `true` to receive deferred events. Deferred events occur when a recipient's email server temporarily rejects a message.
     */
    public bool $deferred;
    /**
     * Set this property to `true` to receive delivered events. Delivered events occur when a message has been successfully delivered to the receiving server.
     */
    public bool $delivered;
    /**
     * Set this property to `true` to receive dropped events. Dropped events occur when your message is not delivered by Twilio SendGrid. Dropped events are accomponied by a `reason` property, which indicates why the message was dropped. Reasons for a dropped message include: Invalid SMTPAPI header, Spam Content (if spam checker app enabled), Unsubscribed Address, Bounced Address, Spam Reporting Address, Invalid, Recipient List over Package Quota.
     */
    public bool $dropped;
    /**
     * Set this property to `true` to enable the Event Webhook or `false` to disable it.
     */
    public bool $enabled;
    /**
     * Optionally set this property to a friendly name for the Event Webhook. A friendly name may be assigned to each of your webhooks to help you differentiate them. The friendly name is for convenience only. You should use the webhook `id` property for any programmatic tasks.
     */
    public ?string $friendly_name;
    /**
     * Set this property to `true` to receive group resubscribe events. Group resubscribes occur when recipients resubscribe to a specific [unsubscribe group](https://docs.sendgrid.com/ui/sending-email/create-and-manage-unsubscribe-groups) by updating their subscription preferences. You must [enable Subscription Tracking](https://docs.sendgrid.com/ui/account-and-settings/tracking#subscription-tracking) to receive this type of event.
     */
    public bool $group_resubscribe;
    /**
     * Set this property to `true` to receive group unsubscribe events. Group unsubscribes occur when recipients unsubscribe from a specific [unsubscribe group](https://docs.sendgrid.com/ui/sending-email/create-and-manage-unsubscribe-groups) either by direct link or by updating their subscription preferences. You must [enable Subscription Tracking](https://docs.sendgrid.com/ui/account-and-settings/tracking#subscription-tracking) to receive this type of event.
     */
    public bool $group_unsubscribe;
    /**
     * Set this property to the OAuth client ID that SendGrid will pass to your OAuth server or service provider to generate an OAuth access token. When passing data in this property, you must also include the `oauth_token_url` property.
     */
    public ?string $oauth_client_id;
    /**
     * Set this property to the OAuth client secret that SendGrid will pass to your OAuth server or service provider to generate an OAuth access token. This secret is needed only once to create an access token. SendGrid will store the secret, allowing you to update your client ID and Token URL without passing the secret to SendGrid again. When passing data in this field, you must also include the `oauth_client_id` and `oauth_token_url` properties.
     */
    public ?string $oauth_client_secret;
    /**
     * Set this property to the URL where SendGrid will send the OAuth client ID and client secret to generate an OAuth access token. This should be your OAuth server or service provider. When passing data in this field, you must also include the `oauth_client_id` property.
     */
    public ?string $oauth_token_url;
    /**
     * Set this property to `true` to receive open events. Open events occur when a recipient has opened the HTML message. You must [enable Open Tracking](https://docs.sendgrid.com/ui/account-and-settings/tracking#open-tracking) to receive this type of event.
     */
    public bool $open;
    /**
     * Set this property to `true` to receive processed events. Processed events occur when a message has been received by Twilio SendGrid and the message is ready to be delivered.
     */
    public bool $processed;
    /**
     * Set this property to `true` to receive spam report events. Spam reports occur when recipients mark a message as spam.
     */
    public bool $spam_report;
    /**
     * Set this property to `true` to receive unsubscribe events. Unsubscribes occur when recipients click on a message's subscription management link. You must [enable Subscription Tracking](https://docs.sendgrid.com/ui/account-and-settings/tracking#subscription-tracking) to receive this type of event.
     */
    public bool $unsubscribe;
    /**
     * Set this property to the URL where you want the Event Webhook to send event data.
     */
    public string $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bounce' => is_bool($value) ? $this->bounce = $value : parent::assignMember($name, $value),
            'click' => is_bool($value) ? $this->click = $value : parent::assignMember($name, $value),
            'deferred' => is_bool($value) ? $this->deferred = $value : parent::assignMember($name, $value),
            'delivered' => is_bool($value) ? $this->delivered = $value : parent::assignMember($name, $value),
            'dropped' => is_bool($value) ? $this->dropped = $value : parent::assignMember($name, $value),
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'friendly_name' => $value === null || is_string($value) ? $this->friendly_name = $value : parent::assignMember($name, $value),
            'group_resubscribe' => is_bool($value) ? $this->group_resubscribe = $value : parent::assignMember($name, $value),
            'group_unsubscribe' => is_bool($value) ? $this->group_unsubscribe = $value : parent::assignMember($name, $value),
            'oauth_client_id' => $value === null || is_string($value) ? $this->oauth_client_id = $value : parent::assignMember($name, $value),
            'oauth_client_secret' => $value === null || is_string($value) ? $this->oauth_client_secret = $value : parent::assignMember($name, $value),
            'oauth_token_url' => $value === null || is_string($value) ? $this->oauth_token_url = $value : parent::assignMember($name, $value),
            'open' => is_bool($value) ? $this->open = $value : parent::assignMember($name, $value),
            'processed' => is_bool($value) ? $this->processed = $value : parent::assignMember($name, $value),
            'spam_report' => is_bool($value) ? $this->spam_report = $value : parent::assignMember($name, $value),
            'unsubscribe' => is_bool($value) ? $this->unsubscribe = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
