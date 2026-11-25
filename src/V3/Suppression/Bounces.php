<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Suppression;

final class Bounces extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** DELETE /v3/suppression/bounces [operationId: DeleteSuppressionBounces] */
    /**
     * Delete bounces
     *
     * **This endpoint allows you to delete all emails on your bounces list.**
     *
     * There are two options for deleting bounced emails:
     *
     * 1. You can delete all bounced emails by setting `delete_all` to `true` in the request body.
     * 2. You can delete a selection of bounced emails by specifying the email addresses in the `emails` array of the request body.
     *
     * **WARNING:** You can not have both `emails` and `delete_all` set.
     */
    public static function delete(?\SendGridSDK\DeleteParams\V3\Suppression\Bounces $params = null): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\Suppression\Bounces::class)->delete($params);
    }

    /** GET /v3/suppression/bounces [operationId: ListSuppressionBounces] */
    /**
     * Retrieve all bounces
     *
     * **This endpoint allows you to retrieve a paginated list of all your bounces.**
     *
     * You can use the `limit` query parameter to set the page size. If your list contains more items than the page size permits, you can make multiple requests. Use the `offset` query parameter to control the position in the list from which to start retrieving additional items.
     */
    public static function get(\SendGridSDK\GetParams\V3\Suppression\Bounces $params): \SendGridSDK\Collections\V3\Suppression\Bounces\Get\SuppressionBouncesCollection
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Suppression\Bounces::class)->get($params);
    }

    /** DELETE /v3/suppression/bounces/{email} [operationId: DeleteSuppressionBounce] */
    /**
     * Delete a bounce
     *
     * **This endpoint allows you to remove an email address from your bounce list.**
     */
    public static function deleteByEmail(string $email, ?\SendGridSDK\DeleteParams\V3\Suppression\Bounces\ByEmail $params = null): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\Suppression\Bounces::class)->deleteByEmail($email, $params);
    }

    /** GET /v3/suppression/bounces/{email} [operationId: GetSuppressionBounces] */
    /**
     * Retrieve a Bounce
     *
     * **This endpoint allows you to retrieve a specific bounce by email address.**
     */
    public static function getByEmail(string $email, ?\SendGridSDK\GetParams\V3\Suppression\Bounces\ByEmail $params = null): \SendGridSDK\Collections\V3\Suppression\Bounces\Get\SuppressionBouncesCollection
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Suppression\Bounces::class)->getByEmail($email, $params);
    }
}
