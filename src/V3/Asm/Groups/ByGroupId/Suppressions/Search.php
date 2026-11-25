<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Asm\Groups\ByGroupId\Suppressions;

final class Search extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** POST /v3/asm/groups/{group_id}/suppressions/search [operationId: SearchSuppressionFromAsmGroup] */
    /**
     * Search for suppressions within a group
     *
     * **This endpoint allows you to search a suppression group for multiple suppressions.**
     *
     * When given a list of email addresses and a group ID, this endpoint will only return the email addresses that have been unsubscribed from the given group.
     */
    public static function post(string $group_id, ?\SendGridSDK\PostParams\V3\Asm\Groups\ByGroupId\Suppressions\Search $params = null): \SendGridSDK\Collections\StringCollection
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Asm\Groups\ByGroupId\Suppressions\Search::class)->post($group_id, $params);
    }
}
