<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Whitelabel\Links;

final class Subuser extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** DELETE /v3/whitelabel/links/subuser [operationId: DisassociateBrandedLinkFromSubuser] */
    /**
     * Disassociate a branded link from a subuser
     *
     * **This endpoint allows you to take a branded link away from a subuser.**
     *
     * Link branding can be associated with subusers from the parent account. This functionality allows subusers to send mail using their parent's link branding. To associate link branding, the parent account must first create a branded link and validate it. The parent may then associate that branded link with a subuser via the API or the [Subuser Management page of the Twilio SendGrid App](https://app.sendgrid.com/settings/subusers).
     *
     * Your request will receive a response with a 204 status code if the disassociation was successful.
     */
    public static function delete(\SendGridSDK\DeleteParams\V3\Whitelabel\Links\Subuser $params): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\Whitelabel\Links\Subuser::class)->delete($params);
    }

    /** GET /v3/whitelabel/links/subuser [operationId: ListSubuserBrandedLink] */
    /**
     * Retrieve a subuser's branded link
     *
     * **This endpoint allows you to retrieve the branded link associated with a subuser.**
     *
     * Link branding can be associated with subusers from the parent account. This functionality allows subusers to send mail using their parent's link branding. To associate link branding, the parent account must first create a branded link and then validate it. The parent may then associate that branded link with a subuser via the API or the [Subuser Management page of the Twilio SendGrid App](https://app.sendgrid.com/settings/subusers).
     */
    public static function get(\SendGridSDK\GetParams\V3\Whitelabel\Links\Subuser $params): \SendGridSDK\DTOs\Link\Branding200
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Whitelabel\Links\Subuser::class)->get($params);
    }
}
