<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Whitelabel\Links\ByLinkId;

final class Subuser extends \SendGridSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/whitelabel/links/{link_id}/subuser',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Link\\Branding200',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Whitelabel\\Links\\ByLinkId\\Subuser\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Associate a branded link with a subuser
     *
     * **This endpoint allows you to associate a branded link with a subuser account.**
     *
     * Link branding can be associated with subusers from the parent account. This functionality allows subusers to send mail using their parent's link branding. To associate link branding, the parent account must first create a branded link and validate it. The parent may then associate that branded link with a subuser via the API or the [Subuser Management page of the Twilio SendGrid App](https://app.sendgrid.com/settings/subusers).
     */
    public function post(int $link_id, ?\SendGridSDK\Requests\V3\Whitelabel\Links\ByLinkId\Subuser\Post $payload = null): \SendGridSDK\DTOs\Link\Branding200
    {
        /** @var \SendGridSDK\DTOs\Link\Branding200 $result */
        $result = func_num_args() > 1 ? $this->executeBody(self::operation(self::POST), $payload, path: ['link_id' => $link_id]) : $this->executeArguments(self::operation(self::POST), path: ['link_id' => $link_id]);
        return $result;
    }
}
