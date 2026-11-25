<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Sso\Integrations\ByIntegrationId;

final class Certificates extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/sso/integrations/{integration_id}/certificates [operationId: ListSsoIntegrationCertificate] */
    /**
     * Get All SSO Certificates by Integration
     *
     * **This endpoint allows you to retrieve all your IdP configurations by configuration ID.**
     *
     * The `integration_id` expected by this endpoint is the `id` returned in the response by the "Get All SSO Integrations" endpoint.
     */
    public static function get(string $integration_id): \SendGridSDK\Collections\V3\Sso\Integrations\ByIntegrationId\Certificates\Get\ByIntegrationIdCertificatesCollection
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Sso\Integrations\ByIntegrationId\Certificates::class)->get($integration_id);
    }
}
