<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Whitelabel\Links\ByLinkId;

final class Subuser extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** POST /v3/whitelabel/links/{link_id}/subuser [operationId: AssociateBrandedLinkWithSubuser] */
    /**
     * Associate a branded link with a subuser
     *
     * **This endpoint allows you to associate a branded link with a subuser account.**
     *
     * Link branding can be associated with subusers from the parent account. This functionality allows subusers to send mail using their parent's link branding. To associate link branding, the parent account must first create a branded link and validate it. The parent may then associate that branded link with a subuser via the API or the [Subuser Management page of the Twilio SendGrid App](https://app.sendgrid.com/settings/subusers).
     */
    public static function post(int $link_id, ?\SendGridSDK\Requests\V3\Whitelabel\Links\ByLinkId\Subuser\Post $payload = null): \SendGridSDK\DTOs\Link\Branding200
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\SendGridSDK\Resources\V3\Whitelabel\Links\ByLinkId\Subuser::class)->post($link_id);
        }
        return self::client()->resource(\SendGridSDK\Resources\V3\Whitelabel\Links\ByLinkId\Subuser::class)->post($link_id, $payload);
    }
}
