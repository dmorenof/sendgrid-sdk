<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Mail\Send\Post;

/**
 * Settings to determine how you would like to track the metrics of how your recipients interact with your email. See [**Tracking Settings**](https://docs.sendgrid.com/ui/account-and-settings/tracking) for more information.
 */
final class TrackingSettingsRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Allows you to track if a recipient clicked a link in your email.
     */
    public \SendGridSDK\Requests\V3\Mail\Send\Post\TrackingSettings\ClickTrackingRequest $click_tracking;
    /**
     * Allows you to enable tracking provided by Google Analytics. See [**Google Analytics and SendGrid Statistics**](https://docs.sendgrid.com/ui/analytics-and-reporting/google-analytics) for more information about this property.
     */
    public \SendGridSDK\Requests\V3\Mail\Send\Post\TrackingSettings\SettingsGanalyticsRequest $ganalytics;
    /**
     * Allows you to track if the email was opened by including a single transparent pixel image in the body of the message content. When the message is opened, a request for the pixel is sent. That request indicates to Twilio SendGrid that the message was opened.
     */
    public \SendGridSDK\Requests\V3\Mail\Send\Post\TrackingSettings\OpenTrackingRequest $open_tracking;
    /**
     * Allows you to insert a subscription management link at the bottom of the text and HTML bodies of your email. If you would like to specify the location of the link within your email, you may use the `substitution_tag` property.
     */
    public \SendGridSDK\Requests\V3\Mail\Send\Post\TrackingSettings\SubscriptionTrackingRequest $subscription_tracking;
}
