<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Partners;

final class Offerings extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/partners/offerings [operationId: ListOffering] */
    /**
     * Get all available offerings
     *
     * Retrieves offerings available under the organization.
     */
    public static function get(): \SendGridSDK\DTOs\AccountProvisioning\Catalog
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Partners\Offerings::class)->get();
    }
}
