<?php

declare(strict_types=1);

namespace SendGridSDK\V3\User;

final class Profile extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/user/profile [operationId: ListProfile] */
    /**
     * Get a user's profile
     *
     * **This endpoint allows you to retrieve your current profile details.**
     */
    public static function get(?\SendGridSDK\GetParams\V3\User\Profile $params = null): \SendGridSDK\Responses\V3\User\Profile\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\User\Profile::class)->get($params);
    }

    /** PATCH /v3/user/profile [operationId: UpdateProfile] */
    /**
     * Update a user's profile
     *
     * **This endpoint allows you to update your current profile details.**
     *
     * Any one or more of the parameters can be updated via the PATCH `/user/profile` endpoint. You must include at least one when you PATCH.
     */
    public static function patch(?\SendGridSDK\PatchParams\V3\User\Profile $params = null): \SendGridSDK\DTOs\User\Profile
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\User\Profile::class)->patch($params);
    }
}
