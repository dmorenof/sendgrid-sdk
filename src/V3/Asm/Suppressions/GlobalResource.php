<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Asm\Suppressions;

final class GlobalResource extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** POST /v3/asm/suppressions/global [operationId: CreateGlobalSuppression] */
    /**
     * Add recipient addresses to the global suppression group.
     *
     * **This endpoint allows you to add one or more email addresses to the global suppressions group.**
     */
    public static function post(?\SendGridSDK\PostParams\V3\Asm\Suppressions\GlobalResource $params = null): \SendGridSDK\Responses\V3\Asm\Suppressions\GlobalResource\Post
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Asm\Suppressions\GlobalResource::class)->post($params);
    }

    /** DELETE /v3/asm/suppressions/global/{email} [operationId: DeleteGlobalSuppression] */
    /**
     * Delete a Global Suppression
     *
     * **This endpoint allows you to remove an email address from the global suppressions group.**
     *
     * Deleting a suppression group will remove the suppression, meaning email will once again be sent to the previously suppressed addresses. This should be avoided unless a recipient indicates they wish to receive email from you again. You can use our [bypass filters](https://sendgrid.com/docs/ui/sending-email/index-suppressions/#bypass-suppressions) to deliver messages to otherwise suppressed addresses when exceptions are required.
     */
    public static function deleteByEmail(string $email, ?\SendGridSDK\DeleteParams\V3\Asm\Suppressions\GlobalResource\ByEmail $params = null): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\Asm\Suppressions\GlobalResource::class)->deleteByEmail($email, $params);
    }

    /** GET /v3/asm/suppressions/global/{email} [operationId: GetGlobalSuppression] */
    /**
     * Retrieve a Global Suppression
     *
     * **This endpoint allows you to retrieve a global suppression. You can also use this endpoint to confirm if an email address is already globally suppresed.**
     *
     * If the email address you include in the URL path parameter `{email}` is already globally suppressed, the response will include that email address. If the address you enter for `{email}` is not globally suppressed, an empty JSON object `{}` will be returned.
     */
    public static function getByEmail(string $email, ?\SendGridSDK\GetParams\V3\Asm\Suppressions\GlobalResource\ByEmail $params = null): \SendGridSDK\Responses\V3\Asm\Suppressions\GlobalResource\ByEmail\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Asm\Suppressions\GlobalResource::class)->getByEmail($email, $params);
    }
}
