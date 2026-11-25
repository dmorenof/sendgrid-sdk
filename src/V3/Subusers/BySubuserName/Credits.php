<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Subusers\BySubuserName;

final class Credits extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/subusers/{subuser_name}/credits [operationId: GetSubuserCredit] */
    /**
     * Get the Credits for a Subuser
     *
     * **This endpoint allows you to retrieve a Credits overview for a Subuser.**
     */
    public static function get(string $subuser_name): \SendGridSDK\DTOs\Subuser\Credits
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Subusers\BySubuserName\Credits::class)->get($subuser_name);
    }

    /** PUT /v3/subusers/{subuser_name}/credits [operationId: UpdateSubuserCredit] */
    /**
     * Update the Credits for a Subuser
     *
     * **This endpoint allows you to update the Credits for a Subuser.**
     */
    public static function put(string $subuser_name, \SendGridSDK\DTOs\Subuser\Credits\Request $payload): \SendGridSDK\DTOs\Subuser\Credits
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Subusers\BySubuserName\Credits::class)->put($subuser_name, $payload);
    }
}
