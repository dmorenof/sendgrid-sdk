<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Ips;

final class Assigned extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/ips/assigned',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Collections\\V3\\Ips\\Assigned\\Get\\IpsAssignedCollection',
    ];

    /**
     * Retrieve all assigned IPs
     *
     * **This endpoint allows you to retrieve only assigned IP addresses.**
     *
     * A single IP address or a range of IP addresses may be dedicated to an account in order to send email for multiple domains. The reputation of this IP is based on the aggregate performance of all the senders who use it.
     */
    public function get(): \SendGridSDK\Collections\V3\Ips\Assigned\Get\IpsAssignedCollection
    {
        /** @var \SendGridSDK\Collections\V3\Ips\Assigned\Get\IpsAssignedCollection $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }
}
