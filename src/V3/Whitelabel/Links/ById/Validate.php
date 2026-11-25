<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Whitelabel\Links\ById;

final class Validate extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** POST /v3/whitelabel/links/{id}/validate [operationId: ValidateBrandedLink] */
    /**
     * Validate a branded link
     *
     * **This endpoint allows you to validate a branded link.**
     *
     * You can submit this request as one of your subusers if you include their ID in the `on-behalf-of` header in the request.
     */
    public static function post(int $id, ?\SendGridSDK\PostParams\V3\Whitelabel\Links\ById\Validate $params = null): \SendGridSDK\Responses\V3\Whitelabel\Links\ById\Validate\Post
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Whitelabel\Links\ById\Validate::class)->post($id, $params);
    }
}
