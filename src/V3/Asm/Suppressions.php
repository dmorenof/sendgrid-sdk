<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Asm;

final class Suppressions extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/asm/suppressions [operationId: ListAsmSuppression] */
    /**
     * Retrieve all suppressions
     *
     * **This endpoint allows you to retrieve a list of all suppressions.**
     */
    public static function get(?\SendGridSDK\GetParams\V3\Asm\Suppressions $params = null): \SendGridSDK\Collections\V3\Asm\Suppressions\Get\AsmSuppressionsCollection
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Asm\Suppressions::class)->get($params);
    }

    /** GET /v3/asm/suppressions/{email} [operationId: GetAsmSuppression] */
    /**
     * Retrieve all suppression groups for an email address
     *
     * **This endpoint returns a list of all groups from which the given email address has been unsubscribed.**
     */
    public static function getByEmail(string $email, ?\SendGridSDK\GetParams\V3\Asm\Suppressions\ByEmail $params = null): \SendGridSDK\Responses\V3\Asm\Suppressions\ByEmail\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Asm\Suppressions::class)->getByEmail($email, $params);
    }
}
