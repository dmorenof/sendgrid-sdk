<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Whitelabel\Domains\ById;

final class Validate extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** POST /v3/whitelabel/domains/{id}/validate [operationId: ValidateAuthenticatedDomain] */
    /**
     * Validate a domain authentication.
     *
     * **This endpoint allows you to validate an authenticated domain. If it fails, it will return an error message describing why the domain could not be validated.**
     */
    public static function post(int $id, ?\SendGridSDK\PostParams\V3\Whitelabel\Domains\ById\Validate $params = null): \SendGridSDK\Responses\V3\Whitelabel\Domains\ById\Validate\Post
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Whitelabel\Domains\ById\Validate::class)->post($id, $params);
    }
}
