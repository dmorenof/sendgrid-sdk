<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Whitelabel\Domains\ById;

final class Ips extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** POST /v3/whitelabel/domains/{id}/ips [operationId: AddIpToAuthenticatedDomain] */
    /**
     * Add an IP to an authenticated domain
     *
     * **This endpoint allows you to add an IP address to an authenticated domain.**
     */
    public static function post(int $id, ?\SendGridSDK\PostParams\V3\Whitelabel\Domains\ById\Ips $params = null): \SendGridSDK\DTOs\AuthenticatedDomainSpf
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Whitelabel\Domains\ById\Ips::class)->post($id, $params);
    }

    /** DELETE /v3/whitelabel/domains/{id}/ips/{ip} [operationId: DeleteIpFromAuthenticatedDomain] */
    /**
     * Remove an IP from an authenticated domain.
     *
     * **This endpoint allows you to remove an IP address from that domain's authentication.**
     */
    public static function deleteByIp(\SendGridSDK\PathParams\V3\Whitelabel\Domains\ById\Ips\ByIp $identifier, ?\SendGridSDK\DeleteParams\V3\Whitelabel\Domains\ById\Ips\ByIp $params = null): \SendGridSDK\DTOs\AuthenticatedDomainSpf
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Whitelabel\Domains\ById\Ips::class)->deleteByIp($identifier, $params);
    }
}
