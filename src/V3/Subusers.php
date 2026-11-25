<?php

declare(strict_types=1);

namespace SendGridSDK\V3;

final class Subusers extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/subusers [operationId: ListSubuser] */
    /**
     * List all Subusers
     *
     * **This endpoint allows you to retrieve a paginated list of all your subusers.**
     *
     * You can use the `username` query parameter to filter the list for specific subusers.
     *
     * You can use the `limit` query parameter to set the page size. If your list contains more items than the page size permits, you can make multiple requests. Use the `offset` query parameter to control the position in the list from which to start retrieving additional items.
     */
    public static function get(?\SendGridSDK\GetParams\V3\Subusers $params = null): \SendGridSDK\Collections\V3\Subusers\Get\SubusersCollection
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Subusers::class)->get($params);
    }

    /** POST /v3/subusers [operationId: CreateSubuser] */
    /**
     * Create Subuser
     *
     * **This endpoint allows you to create a new subuser.**
     */
    public static function post(?\SendGridSDK\Requests\V3\Subusers\Post $payload = null): \SendGridSDK\DTOs\Subuser\Post
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\SendGridSDK\Resources\V3\Subusers::class)->post();
        }
        return self::client()->resource(\SendGridSDK\Resources\V3\Subusers::class)->post($payload);
    }

    /** DELETE /v3/subusers/{subuser_name} [operationId: DeleteSubuser] */
    /**
     * Delete a subuser
     *
     * **This endpoint allows you to delete a subuser.**
     *
     * This is a permanent action. Once deleted, a subuser cannot be retrieved.
     */
    public static function deleteBySubuserName(string $subuser_name): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\Subusers::class)->deleteBySubuserName($subuser_name);
    }

    /** PATCH /v3/subusers/{subuser_name} [operationId: UpdateSubuser] */
    /**
     * Enable/disable a subuser
     *
     * **This endpoint allows you to enable or disable a subuser.**
     */
    public static function patchBySubuserName(string $subuser_name, ?\SendGridSDK\Requests\V3\Subusers\BySubuserName\Patch $payload = null): void
    {
        if (func_num_args() <= 1) {
            self::client()->resource(\SendGridSDK\Resources\V3\Subusers::class)->patchBySubuserName($subuser_name);
            return;
        }
        self::client()->resource(\SendGridSDK\Resources\V3\Subusers::class)->patchBySubuserName($subuser_name, $payload);
    }
}
