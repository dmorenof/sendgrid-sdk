<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Asm;

final class Groups extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/asm/groups [operationId: ListAsmGroup] */
    /**
     * Retrieve all suppression groups associated with the user.
     *
     * **This endpoint allows you to retrieve a list of all suppression groups created by this user.**
     *
     * This endpoint can also return information for multiple group IDs that you include in your request. To add a group ID to your request, simply append `?id=123456&id=123456`, with the appropriate group IDs.
     */
    public static function get(?\SendGridSDK\GetParams\V3\Asm\Groups $params = null): \SendGridSDK\Collections\V3\Asm\Groups\Get\AsmGroupsCollection
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Asm\Groups::class)->get($params);
    }

    /** POST /v3/asm/groups [operationId: CreatAsmGroup] */
    /**
     * Create a new suppression group
     *
     * **This endpoint allows you to create a new suppression group.**
     *
     * To add an email address to the suppression group, [create a Suppression](https://docs.sendgrid.com/api-reference/suppressions-suppressions/add-suppressions-to-a-suppression-group).
     */
    public static function post(?\SendGridSDK\PostParams\V3\Asm\Groups $params = null): \SendGridSDK\Responses\V3\Asm\Groups\Post
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Asm\Groups::class)->post($params);
    }

    /** DELETE /v3/asm/groups/{group_id} [operationId: DeleteAsmGroup] */
    /**
     * Delete a Suppression Group
     *
     * **This endpoint allows you to delete a suppression group.**
     *
     * If a recipient uses the "one-click unsubscribe" option on an email associated with a deleted group, that recipient will be added to the global suppression list.
     *
     * Deleting a suppression group will remove the suppression, meaning email will once again be sent to the previously suppressed addresses. This should be avoided unless a recipient indicates they wish to receive email from you again. You can use our [bypass filters](https://sendgrid.com/docs/ui/sending-email/index-suppressions/#bypass-suppressions) to deliver messages to otherwise suppressed addresses when exceptions are required.
     */
    public static function deleteByGroupId(string $group_id, ?\SendGridSDK\DeleteParams\V3\Asm\Groups\ByGroupId $params = null): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\Asm\Groups::class)->deleteByGroupId($group_id, $params);
    }

    /** GET /v3/asm/groups/{group_id} [operationId: GetAsmGroup] */
    /**
     * Get information on a single suppression group.
     *
     * **This endpoint allows you to retrieve a single suppression group.**
     */
    public static function getByGroupId(string $group_id, ?\SendGridSDK\GetParams\V3\Asm\Groups\ByGroupId $params = null): \SendGridSDK\Responses\V3\Asm\Groups\ByGroupId\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Asm\Groups::class)->getByGroupId($group_id, $params);
    }

    /** PATCH /v3/asm/groups/{group_id} [operationId: UpdateAsmGroup] */
    /**
     * Update a suppression group.
     *
     * **This endpoint allows you to update or change a suppression group.**
     */
    public static function patchByGroupId(string $group_id, ?\SendGridSDK\PatchParams\V3\Asm\Groups\ByGroupId $params = null): \SendGridSDK\DTOs\SuppressionGroup
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Asm\Groups::class)->patchByGroupId($group_id, $params);
    }
}
