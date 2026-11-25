<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Ips;

final class Remaining extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/ips/remaining',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Ips\\Remaining\\Get',
    ];

    /**
     * Get remaining IPs count
     *
     * **This endpoint gets amount of IP Addresses that can still be created during a given period and the price of those IPs.**
     */
    public function get(): \SendGridSDK\Responses\V3\Ips\Remaining\Get
    {
        /** @var \SendGridSDK\Responses\V3\Ips\Remaining\Get $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }
}
