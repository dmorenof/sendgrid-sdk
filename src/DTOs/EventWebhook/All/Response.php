<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\EventWebhook\All;

/**
 * Event Webhook Response Body: All Webhooks
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The maximum number of Event Webhooks you can have enabled under your current Twilio SendGrid plan. See the [Twilio SendGrid pricing page](https://sendgrid.com/pricing) for more information about the features available with each plan.
     */
    public float $max_allowed;
    /**
     * An array of Event Webhook objects. Each object represents one of your webhooks and contains its configuration settings, including which events it is set to send in the POST request, the URL where it will send those events, and the webhook's ID.
     */
    public \SendGridSDK\Collections\EventWebhook\All\Response\WebhooksCollection $webhooks;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'max_allowed' => is_float($value) ? $this->max_allowed = $value : parent::assignMember($name, $value),
            'webhooks' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->webhooks = new \SendGridSDK\Collections\EventWebhook\All\Response\WebhooksCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendGridSDK\DTOs\EventWebhook\Signed\Response::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
