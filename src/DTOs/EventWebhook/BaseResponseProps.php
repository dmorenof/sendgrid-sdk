<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\EventWebhook;

final class BaseResponseProps extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Indicates if the webhook is configured to send account status change events related to compliance action taken by SendGrid.
     */
    public bool $account_status_change;
    /**
     * Indicates if the webhook is configured to send bounce events. A bounce occurs when a receiving server could not or would not accept a message.
     */
    public bool $bounce;
    /**
     * Indicates if the webhook is configured to send click events. Click events occur when a recipient clicks on a link within the message. You must [enable Click Tracking](https://docs.sendgrid.com/ui/account-and-settings/tracking#click-tracking) to receive this type of event.
     */
    public bool $click;
    /**
     * Indicates if the webhook is configured to send deferred events. Deferred events occur when a recipient's email server temporarily rejects a message.
     */
    public bool $deferred;
    /**
     * Indicates if the webhook is configured to send delivered events. Delivered events occur when a message has been successfully delivered to the receiving server.
     */
    public bool $delivered;
    /**
     * Indicates if the webhook is configured to send dropped events. Dropped events occur when your message is not delivered by Twilio SendGrid. Dropped events are accomponied by a `reason` property, which indicates why the message was dropped. Reasons for a dropped message include: Invalid SMTPAPI header, Spam Content (if spam checker app enabled), Unsubscribed Address, Bounced Address, Spam Reporting Address, Invalid, Recipient List over Package Quota.
     */
    public bool $dropped;
    /**
     * Indicates if the Event Webhook is enabled.
     */
    public bool $enabled;
    /**
     * An optional friendly name assigned to the Event Webhook to help you differentiate it. The friendly name is for convenience only. You should use the webhook `id` property for any programmatic tasks.
     */
    public ?string $friendly_name;
    /**
     * Indicates if the webhook is configured to send group resubscribe events. Group resubscribes occur when recipients resubscribe to a specific [unsubscribe group](https://docs.sendgrid.com/ui/sending-email/create-and-manage-unsubscribe-groups) by updating their subscription preferences. You must [enable Subscription Tracking](https://docs.sendgrid.com/ui/account-and-settings/tracking#subscription-tracking) to receive this type of event.
     */
    public bool $group_resubscribe;
    /**
     * Indicates if the webhook is configured to send group unsubscribe events. Group unsubscribes occur when recipients unsubscribe from a specific [unsubscribe group](https://docs.sendgrid.com/ui/sending-email/create-and-manage-unsubscribe-groups) either by direct link or by updating their subscription preferences. You must [enable Subscription Tracking](https://docs.sendgrid.com/ui/account-and-settings/tracking#subscription-tracking) to receive this type of event.
     */
    public bool $group_unsubscribe;
    /**
     * A unique string used to identify the webhook. A webhook's ID is generated programmatically and cannot be changed after creation. You can assign a natural language identifier to your webhook using the `friendly_name` property.
     */
    public string $id;
    /**
     * Indicates if the webhook is configured to send open events. Open events occur when a recipient has opened the HTML message. You must [enable Open Tracking](https://docs.sendgrid.com/ui/account-and-settings/tracking#open-tracking) to receive this type of event.
     */
    public bool $open;
    /**
     * Indicates if the webhook is configured to send processed events. Processed events occur when a message has been received by Twilio SendGrid and is ready to be delivered.
     */
    public bool $processed;
    /**
     * Indicates if the webhook is configured to send spam report events. Spam reports occur when recipients mark a message as spam.
     */
    public bool $spam_report;
    /**
     * Indicates if the webhook is configured to send unsubscribe events. Unsubscribes occur when recipients click on a message's subscription management link. You must [enable Subscription Tracking](https://docs.sendgrid.com/ui/account-and-settings/tracking#subscription-tracking) to receive this type of event.
     */
    public bool $unsubscribe;
    /**
     * The URL where SendGrid will send event data.
     */
    public string $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account_status_change' => is_bool($value) ? $this->account_status_change = $value : parent::assignMember($name, $value),
            'bounce' => is_bool($value) ? $this->bounce = $value : parent::assignMember($name, $value),
            'click' => is_bool($value) ? $this->click = $value : parent::assignMember($name, $value),
            'deferred' => is_bool($value) ? $this->deferred = $value : parent::assignMember($name, $value),
            'delivered' => is_bool($value) ? $this->delivered = $value : parent::assignMember($name, $value),
            'dropped' => is_bool($value) ? $this->dropped = $value : parent::assignMember($name, $value),
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'friendly_name' => $value === null || is_string($value) ? $this->friendly_name = $value : parent::assignMember($name, $value),
            'group_resubscribe' => is_bool($value) ? $this->group_resubscribe = $value : parent::assignMember($name, $value),
            'group_unsubscribe' => is_bool($value) ? $this->group_unsubscribe = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'open' => is_bool($value) ? $this->open = $value : parent::assignMember($name, $value),
            'processed' => is_bool($value) ? $this->processed = $value : parent::assignMember($name, $value),
            'spam_report' => is_bool($value) ? $this->spam_report = $value : parent::assignMember($name, $value),
            'unsubscribe' => is_bool($value) ? $this->unsubscribe = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
