<?php

declare(strict_types=1);

namespace SendGridSDK\V3;

final class Teammates extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/teammates [operationId: ListTeammate] */
    /**
     * Retrieve all teammates
     *
     * **This endpoint allows you to retrieve a paginated list of all current Teammates.**
     *
     * You can use the `limit` query parameter to set the page size. If your list contains more items than the page size permits, you can make multiple requests. Use the `offset` query parameter to control the position in the list from which to start retrieving additional items.
     */
    public static function get(?\SendGridSDK\GetParams\V3\Teammates $params = null): \SendGridSDK\Responses\V3\Teammates\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Teammates::class)->get($params);
    }

    /** POST /v3/teammates [operationId: InviteTeammate] */
    /**
     * Invite teammate
     *
     * **This endpoint allows you to invite a Teammate to your account via email.**
     *
     * You can set a Teammate's initial permissions using the `scopes` array in the request body. Teammate's will receive a minimum set of scopes from Twilio SendGrid that are necessary for the Teammate to function.
     *
     * **Note:** A teammate invite will expire after 7 days, but you may resend the invitation at any time to reset the expiration date.
     */
    public static function post(?\SendGridSDK\PostParams\V3\Teammates $params = null): \SendGridSDK\Responses\V3\Teammates\Post
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Teammates::class)->post($params);
    }

    /** DELETE /v3/teammates/{username} [operationId: DeleteTeammate] */
    /**
     * Delete teammate
     *
     * **This endpoint allows you to delete a teammate.**
     *
     * **Only the parent user or an admin teammate can delete another teammate.**
     */
    public static function deleteByUsername(string $username, ?\SendGridSDK\DeleteParams\V3\Teammates\ByUsername $params = null): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\Teammates::class)->deleteByUsername($username, $params);
    }

    /** GET /v3/teammates/{username} [operationId: GetTeammate] */
    /**
     * Retrieve specific teammate
     *
     * **This endpoint allows you to retrieve a specific Teammate by username.**
     *
     * You can retrieve the username's for each of your Teammates using the "Retrieve all Teammates" endpoint.
     */
    public static function getByUsername(string $username, ?\SendGridSDK\GetParams\V3\Teammates\ByUsername $params = null): \SendGridSDK\Responses\V3\Teammates\ByUsername\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Teammates::class)->getByUsername($username, $params);
    }

    /** PATCH /v3/teammates/{username} [operationId: UpdateTeammate] */
    /**
     * Update teammate's permissions
     *
     * **This endpoint allows you to update a teammate’s permissions.**
     *
     * To turn a teammate into an admin, the request body should contain an `is_admin` set to `true`. Otherwise, set `is_admin` to `false` and pass in all the scopes that a teammate should have.
     *
     * **Only the parent user or other admin teammates can update another teammate’s permissions.**
     *
     * **Admin users can only update permissions.**
     */
    public static function patchByUsername(string $username, ?\SendGridSDK\PatchParams\V3\Teammates\ByUsername $params = null): \SendGridSDK\Responses\V3\Teammates\ByUsername\Patch
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Teammates::class)->patchByUsername($username, $params);
    }
}
