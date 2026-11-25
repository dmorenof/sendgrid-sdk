<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Suppression;

final class Blocks extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** DELETE /v3/suppression/blocks [operationId: DeleteSuppressionBlocks] */
    /**
     * Delete blocks
     *
     * **This endpoint allows you to delete all email addresses on your blocks list.**
     *
     * There are two options for deleting blocked emails:
     *
     * 1. You can delete all blocked emails by setting `delete_all` to `true` in the request body.
     * 2. You can delete a selection of blocked emails by specifying the email addresses in the `emails` array of the request body.
     */
    public static function delete(?\SendGridSDK\DeleteParams\V3\Suppression\Blocks $params = null): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\Suppression\Blocks::class)->delete($params);
    }

    /** GET /v3/suppression/blocks [operationId: ListSuppressionBlock] */
    /**
     * Retrieve all blocks
     *
     * **This endpoint allows you to retrieve a paginated list of all email addresses that are currently on your blocks list.**
     *
     * You can use the `limit` query parameter to set the page size. If your list contains more items than the page size permits, you can make multiple requests. Use the `offset` query parameter to control the position in the list from which to start retrieving additional items.
     */
    public static function get(?\SendGridSDK\GetParams\V3\Suppression\Blocks $params = null): \SendGridSDK\Collections\V3\Suppression\Blocks\Get\SuppressionBlocksCollection
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Suppression\Blocks::class)->get($params);
    }

    /** DELETE /v3/suppression/blocks/{email} [operationId: DeleteSuppressionBlock] */
    /**
     * Delete a specific block
     *
     * **This endpoint allows you to delete a specific email address from your blocks list.**
     */
    public static function deleteByEmail(string $email, ?\SendGridSDK\DeleteParams\V3\Suppression\Blocks\ByEmail $params = null): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\Suppression\Blocks::class)->deleteByEmail($email, $params);
    }

    /** GET /v3/suppression/blocks/{email} [operationId: GetSuppressionBlock] */
    /**
     * Retrieve a specific block
     *
     * **This endpoint allows you to retrieve a specific email address from your blocks list.**
     */
    public static function getByEmail(string $email, ?\SendGridSDK\GetParams\V3\Suppression\Blocks\ByEmail $params = null): \SendGridSDK\Collections\V3\Suppression\Blocks\ByEmail\Get\BlocksByEmailCollection
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Suppression\Blocks::class)->getByEmail($email, $params);
    }
}
