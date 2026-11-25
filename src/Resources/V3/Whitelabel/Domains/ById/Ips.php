<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Whitelabel\Domains\ById;

final class Ips extends \SendGridSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/whitelabel/domains/{id}/ips',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\AuthenticatedDomainSpf',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Whitelabel\\Domains\\ById\\Ips\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Add an IP to an authenticated domain
     *
     * **This endpoint allows you to add an IP address to an authenticated domain.**
     */
    public function post(int $id, ?\SendGridSDK\PostParams\V3\Whitelabel\Domains\ById\Ips $params = null): \SendGridSDK\DTOs\AuthenticatedDomainSpf
    {
        /** @var \SendGridSDK\DTOs\AuthenticatedDomainSpf $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['id' => $id], parameters: $params);
        return $result;
    }

    private const array DELETE_BY_IP = [
        'method' => 'DELETE',
        'path' => '/v3/whitelabel/domains/{id}/ips/{ip}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\AuthenticatedDomainSpf',
    ];

    /**
     * Remove an IP from an authenticated domain.
     *
     * **This endpoint allows you to remove an IP address from that domain's authentication.**
     */
    public function deleteByIp(\SendGridSDK\PathParams\V3\Whitelabel\Domains\ById\Ips\ByIp $identifier, ?\SendGridSDK\DeleteParams\V3\Whitelabel\Domains\ById\Ips\ByIp $params = null): \SendGridSDK\DTOs\AuthenticatedDomainSpf
    {
        /** @var \SendGridSDK\DTOs\AuthenticatedDomainSpf $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_IP), path: $identifier, parameters: $params);
        return $result;
    }
}
