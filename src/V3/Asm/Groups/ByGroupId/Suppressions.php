<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Asm\Groups\ByGroupId;

final class Suppressions extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/asm/groups/{group_id}/suppressions [operationId: ListSuppressionFromAsmGroup] */
    /**
     * Retrieve all suppressions for a suppression group
     *
     * **This endpoint allows you to retrieve all suppressed email addresses belonging to the given group.**
     */
    public static function get(string $group_id, ?\SendGridSDK\GetParams\V3\Asm\Groups\ByGroupId\Suppressions $params = null): \SendGridSDK\Collections\StringCollection
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Asm\Groups\ByGroupId\Suppressions::class)->get($group_id, $params);
    }

    /** POST /v3/asm/groups/{group_id}/suppressions [operationId: AddSuppressionToAsmGroup] */
    /**
     * Add suppressions to a suppression group
     *
     * **This endpoint allows you to add email addresses to an unsubscribe group.**
     *
     * If you attempt to add suppressions to a group that has been deleted or does not exist, the suppressions will be added to the global suppressions list.
     */
    public static function post(string $group_id, ?\SendGridSDK\PostParams\V3\Asm\Groups\ByGroupId\Suppressions $params = null): \SendGridSDK\Responses\V3\Asm\Groups\ByGroupId\Suppressions\Post
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Asm\Groups\ByGroupId\Suppressions::class)->post($group_id, $params);
    }

    /** DELETE /v3/asm/groups/{group_id}/suppressions/{email} [operationId: DeleteSuppressionFromAsmGroup] */
    /**
     * Delete a suppression from a suppression group
     *
     * **This endpoint allows you to remove a suppressed email address from the given suppression group.**
     *
     * Removing an address will remove the suppression, meaning email will once again be sent to the previously suppressed addresses. This should be avoided unless a recipient indicates they wish to receive email from you again. You can use our [bypass filters](https://sendgrid.com/docs/ui/sending-email/index-suppressions/#bypass-suppressions) to deliver messages to otherwise suppressed addresses when exceptions are required.
     */
    public static function deleteByEmail(\SendGridSDK\PathParams\V3\Asm\Groups\ByGroupId\Suppressions\ByEmail $identifier, ?\SendGridSDK\DeleteParams\V3\Asm\Groups\ByGroupId\Suppressions\ByEmail $params = null): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\Asm\Groups\ByGroupId\Suppressions::class)->deleteByEmail($identifier, $params);
    }
}
