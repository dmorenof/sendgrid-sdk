<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Whitelabel\Links;

final class DefaultResource extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/whitelabel/links/default [operationId: ListDefaultBrandedLink] */
    /**
     * Retrieve the default branded link
     *
     * **This endpoint allows you to retrieve the default branded link.**
     *
     * The default branded link is the actual URL to be used when sending messages. If you have more than one branded link, the default is determined by the following order:
     *
     * * The validated branded link marked as `default` (set when you call the "Create a branded link" endpoint or by calling the "Update a branded link" endpoint on an existing link)
     * * Legacy branded links (migrated from the whitelabel wizard)
     * * Default SendGrid-branded links (i.e., `100.ct.sendgrid.net`)
     *
     * You can submit this request as one of your subusers if you include their ID in the `on-behalf-of` header in the request.
     */
    public static function get(?\SendGridSDK\GetParams\V3\Whitelabel\Links\DefaultResource $params = null): \SendGridSDK\DTOs\Link\Branding200
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Whitelabel\Links\DefaultResource::class)->get($params);
    }
}
