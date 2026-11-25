<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Mail;

final class Send extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** POST /v3/mail/send [operationId: SendMail] */
    /**
     * Send Email with Twilio SendGrid.
     *
     * *The Mail Send operation allows you to send email over SendGrid's v3 Web API*
     *
     * For an overview of this API, including its features and limitations, please see the [Mail Send API overview page](https://www.twilio.com/docs/sendgrid/api-reference/mail-send)
     *
     * The overview page also includes links to SendGrid's Email API quickstarts and helper libraries to get you working with this endpoint even faster.
     *
     */
    public static function post(?\SendGridSDK\PostParams\V3\Mail\Send $params = null): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\Mail\Send::class)->post($params);
    }
}
