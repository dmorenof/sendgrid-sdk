<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Contactdb;

final class Lists extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** DELETE /v3/contactdb/lists [operationId: DeleteContactDbLists] */
    /**
     * Delete Multiple lists
     *
     * **This endpoint allows you to delete multiple recipient lists.**
     */
    public static function delete(?\SendGridSDK\DeleteParams\V3\Contactdb\Lists $params = null): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\Contactdb\Lists::class)->delete($params);
    }

    /** GET /v3/contactdb/lists [operationId: ListContactDbList] */
    /**
     * Retrieve all lists
     *
     * **This endpoint allows you to retrieve all of your recipient lists. If you don't have any lists, an empty array will be returned.**
     */
    public static function get(?\SendGridSDK\GetParams\V3\Contactdb\Lists $params = null): \SendGridSDK\Responses\V3\Contactdb\Lists\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Contactdb\Lists::class)->get($params);
    }

    /** POST /v3/contactdb/lists [operationId: CreateContactDbList] */
    /**
     * Create a List
     *
     * **This endpoint allows you to create a list for your recipients.**
     */
    public static function post(?\SendGridSDK\PostParams\V3\Contactdb\Lists $params = null): \SendGridSDK\DTOs\Contactdb\List2Xx
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Contactdb\Lists::class)->post($params);
    }

    /** DELETE /v3/contactdb/lists/{list_id} [operationId: DeleteContactDbList] */
    /**
     * Delete a List
     *
     * **This endpoint allows you to delete a specific recipient list with the given ID.**
     */
    public static function deleteByListId(int $list_id, ?\SendGridSDK\DeleteParams\V3\Contactdb\Lists\ByListId $params = null): mixed
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Contactdb\Lists::class)->deleteByListId($list_id, $params);
    }

    /** GET /v3/contactdb/lists/{list_id} [operationId: GetContactDbList] */
    /**
     * Retrieve a single list
     *
     * **This endpoint allows you to retrieve a single recipient list.**
     */
    public static function getByListId(int $list_id, ?\SendGridSDK\GetParams\V3\Contactdb\Lists\ByListId $params = null): \SendGridSDK\DTOs\Contactdb\List2Xx
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Contactdb\Lists::class)->getByListId($list_id, $params);
    }

    /** PATCH /v3/contactdb/lists/{list_id} [operationId: UpdateContactDbList] */
    /**
     * Update a List
     *
     * **This endpoint allows you to update the name of one of your recipient lists.**
     */
    public static function patchByListId(int $list_id, ?\SendGridSDK\PatchParams\V3\Contactdb\Lists\ByListId $params = null): \SendGridSDK\Responses\V3\Contactdb\Lists\ByListId\Patch
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Contactdb\Lists::class)->patchByListId($list_id, $params);
    }
}
