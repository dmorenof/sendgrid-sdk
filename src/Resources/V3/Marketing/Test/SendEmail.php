<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Marketing\Test;

final class SendEmail extends \SendGridSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/marketing/test/send_email',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            202,
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\Mc\\TestError\\Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\Mc\\TestError\\Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Marketing\\Test\\SendEmail\\Post',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Marketing\\Test\\SendEmail\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Send a Test Marketing Email
     *
     * **This endpoint allows you to send a test marketing email to a list of email addresses**.
     *
     * Before sending a marketing message, you can test it using this endpoint. You may specify up to **10 contacts** in the `emails` request body field. You must also specify a `template_id` and include either a `from_address` or `sender_id`. You can manage your templates with the [Twilio SendGrid App](https://mc.sendgrid.com/dynamic-templates) or the [Transactional Templates API](https://docs.sendgrid.com/api-reference/transactional-templates).
     *
     * > Please note that this endpoint works with Dynamic Transactional Templates only. Legacy Transactional Templates will not be delivered.
     *
     * For more information about managing Dynamic Transactional Templates, see [How to Send Email with Dynamic Transactional Templates](https://sendgrid.com/docs/ui/sending-email/how-to-send-an-email-with-dynamic-transactional-templates/).
     *
     * You can also test your Single Sends in the [Twilio SendGrid Marketing Campaigns UI](https://mc.sendgrid.com/single-sends).
     */
    public function post(?\SendGridSDK\Requests\V3\Marketing\Test\SendEmail\Post $payload = null): \SendGridSDK\Responses\V3\Marketing\Test\SendEmail\Post
    {
        /** @var \SendGridSDK\Responses\V3\Marketing\Test\SendEmail\Post $result */
        $result = func_num_args() > 0 ? $this->executeBody(self::operation(self::POST), $payload) : $this->executeArguments(self::operation(self::POST));
        return $result;
    }
}
