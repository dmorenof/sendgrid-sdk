<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Sso;

final class Integrations extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/sso/integrations [operationId: ListSsoIntegration] */
    /**
     * Get All SSO Integrations
     *
     * **This endpoint allows you to retrieve all SSO integrations tied to your Twilio SendGrid account.**
     *
     * The IDs returned by this endpoint can be used by the APIs additional endpoints to modify your SSO integrations.
     */
    public static function get(?\SendGridSDK\GetParams\V3\Sso\Integrations $params = null): \SendGridSDK\Collections\V3\Sso\Integrations\Get\SsoIntegrationsCollection
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Sso\Integrations::class)->get($params);
    }

    /** POST /v3/sso/integrations [operationId: CreateSsoIntegration] */
    /**
     * Create an SSO Integration
     *
     * **This endpoint allows you to create an SSO integration.**
     */
    public static function post(?\SendGridSDK\DTOs\Post\PatchIntegration\Request $payload = null): \SendGridSDK\DTOs\Sso\Integration
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\SendGridSDK\Resources\V3\Sso\Integrations::class)->post();
        }
        return self::client()->resource(\SendGridSDK\Resources\V3\Sso\Integrations::class)->post($payload);
    }

    /** DELETE /v3/sso/integrations/{id} [operationId: DeleteSsoIntegration] */
    /**
     * Delete an SSO Integration
     *
     * **This endpoint allows you to delete an IdP configuration by ID.**
     *
     * You can retrieve the IDs for your configurations from the response provided by the "Get All SSO Integrations" endpoint.
     */
    public static function deleteById(string $id): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\Sso\Integrations::class)->deleteById($id);
    }

    /** GET /v3/sso/integrations/{id} [operationId: GetSsoIntegration] */
    /**
     * Get an SSO Integration
     *
     * **This endpoint allows you to retrieve an SSO integration by ID.**
     *
     * You can retrieve the IDs for your configurations from the response provided by the "Get All SSO Integrations" endpoint.
     */
    public static function getById(string $id, ?\SendGridSDK\GetParams\V3\Sso\Integrations\ById $params = null): \SendGridSDK\DTOs\Sso\Integration
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Sso\Integrations::class)->getById($id, $params);
    }

    /** PATCH /v3/sso/integrations/{id} [operationId: UpdateSsoIntegration] */
    /**
     * Update an SSO Integration
     *
     * **This endpoint allows you to modify an exisiting SSO integration.**
     *
     * You can retrieve the IDs for your configurations from the response provided by the "Get All SSO Integrations" endpoint.
     */
    public static function patchById(string $id, ?\SendGridSDK\PatchParams\V3\Sso\Integrations\ById $params = null): \SendGridSDK\DTOs\Sso\Integration
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Sso\Integrations::class)->patchById($id, $params);
    }
}
