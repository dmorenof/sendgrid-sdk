<?php

declare(strict_types=1);

namespace SendGridSDK\V3\User\Settings;

final class EnforcedTls extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/user/settings/enforced_tls [operationId: ListEnforcedTlsSetting] */
    /**
     * Retrieve current Enforced TLS settings.
     *
     * **This endpoint allows you to retrieve your current Enforced TLS settings.**
     *
     * The Enforced TLS settings specify whether or not the recipient is required to support TLS or have a valid certificate.
     *
     * If either `require_tls` or `require_valid_cert` is set to `true`, the recipient must support TLS 1.1 or higher or have a valid certificate. If these conditions are not met, Twilio SendGrid will drop the message and send a block event with “TLS required but not supported” as the description.
     */
    public static function get(?\SendGridSDK\GetParams\V3\User\Settings\EnforcedTls $params = null): \SendGridSDK\DTOs\EnforcedTlsRequestResponse
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\User\Settings\EnforcedTls::class)->get($params);
    }

    /** PATCH /v3/user/settings/enforced_tls [operationId: UpdateEnforcedTlsSetting] */
    /**
     * Update Enforced TLS settings
     *
     * **This endpoint allows you to update your Enforced TLS settings.**
     *
     * To require TLS from recipients, set `require_tls` to `true`. If either `require_tls` or `require_valid_cert` is set to `true`, the recipient must support TLS 1.1 or higher or have a valid certificate. If these conditions are not met, Twilio SendGrid will drop the message and send a block event with “TLS required but not supported” as the description.
     */
    public static function patch(?\SendGridSDK\PatchParams\V3\User\Settings\EnforcedTls $params = null): \SendGridSDK\DTOs\EnforcedTlsRequestResponse
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\User\Settings\EnforcedTls::class)->patch($params);
    }
}
