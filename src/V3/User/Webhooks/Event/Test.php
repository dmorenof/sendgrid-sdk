<?php

declare(strict_types=1);

namespace SendGridSDK\V3\User\Webhooks\Event;

final class Test extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** POST /v3/user/webhooks/event/test [operationId: TestEventWebhook] */
    /**
     * Test an Event Webhook's settings
     *
     * **This endpoint allows you to test an Event Webhook.**
     *
     * Retry logic for this endpoint differs from other endpoints, which use a rolling 24-hour retry.
     *
     * This endpoint will make a POST request with a fake event notification to a URL you provide. This allows you to verify that you have properly configured the webhook before sending real data to your URL.
     *
     * ### Test OAuth configuration
     *
     * To test your OAuth configuration, you must include the necessary OAuth properties: `oauth_client_id`, `oauth_client_secret`, and `oauth_token_url`.
     *
     * If the webhook you are testing already has OAuth credentials saved, you will provide only the `oauth_client_id` and `oauth_token_url`—we will pull the secret for you. If you are testing a new set of OAuth credentials that have not been saved with SendGrid, you must provide all three property values.
     *
     * You can retrieve a previously saved `oauth_client_id` and `oauth_token_url` from the [**Get an Event Webhook**](https://docs.sendgrid.com/api-reference/webhooks/get-an-event-webhook) endpoint; however, for security reasons, SendGrid will not provide your `oauth_client_secret`.
     */
    public static function post(?\SendGridSDK\PostParams\V3\User\Webhooks\Event\Test $params = null): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\User\Webhooks\Event\Test::class)->post($params);
    }
}
