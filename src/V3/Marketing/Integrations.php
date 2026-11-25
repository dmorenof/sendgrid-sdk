<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Marketing;

final class Integrations extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** DELETE /v3/marketing/integrations [operationId: DeleteIntegration] */
    /**
     * DeleteBulkIntegration
     *
     * This endpoint deletes Integrations.
     */
    public static function delete(\SendGridSDK\DeleteParams\V3\Marketing\Integrations $params): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Integrations::class)->delete($params);
    }

    /** GET /v3/marketing/integrations [operationId: GetIntegrationsByUser] */
    /**
     * ListIntegration
     *
     * This endpoint returns all the Integrations for the user making this call.
     */
    public static function get(): \SendGridSDK\Responses\V3\Marketing\Integrations\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Integrations::class)->get();
    }

    /** POST /v3/marketing/integrations [operationId: AddIntegration] */
    /**
     * CreateIntegration
     *
     * This endpoint creates an Integration for email event forwarding. Each Integration has a maximum number of allowed Integration instances per user. For example, users can create up to 10 Segment Integrations.
     */
    public static function post(\SendGridSDK\DTOs\Integration\Input $payload): \SendGridSDK\DTOs\Integration
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Integrations::class)->post($payload);
    }

    /** GET /v3/marketing/integrations/{id} [operationId: FindIntegrationById] */
    /**
     * GetIntegration
     *
     * This endpoint returns the data for a specific Integration.
     */
    public static function getById(string $id): \SendGridSDK\DTOs\Integration
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Integrations::class)->getById($id);
    }

    /** PATCH /v3/marketing/integrations/{id} [operationId: UpdateIntegration] */
    /**
     * UpdateIntegration
     *
     * This endpoint updates an existing Integration.
     */
    public static function patchById(string $id, \SendGridSDK\DTOs\Integration\Patch $payload): \SendGridSDK\DTOs\Integration
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Integrations::class)->patchById($id, $payload);
    }
}
