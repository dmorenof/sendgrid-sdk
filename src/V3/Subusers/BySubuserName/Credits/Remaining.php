<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Subusers\BySubuserName\Credits;

final class Remaining extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** PATCH /v3/subusers/{subuser_name}/credits/remaining [operationId: UpdateSubuserRemainingCredit] */
    /**
     * Update the remaining credits for a Subuser
     *
     * **This endpoint allows you to update the remaining credits for a Subuser.**
     */
    public static function patch(string $subuser_name, \SendGridSDK\Requests\V3\Subusers\BySubuserName\Credits\Remaining\Patch $payload): \SendGridSDK\DTOs\Subuser\Credits
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Subusers\BySubuserName\Credits\Remaining::class)->patch($subuser_name, $payload);
    }
}
