<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Contactdb;

final class Status extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/contactdb/status',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Contactdb\\Status\\Get',
    ];

    /**
     * Get Recipient Upload Status
     *
     * **This endpoint allows you to check the upload status of a Marketing Campaigns recipient.**
     */
    public function get(?\SendGridSDK\GetParams\V3\Contactdb\Status $params = null): \SendGridSDK\Responses\V3\Contactdb\Status\Get
    {
        /** @var \SendGridSDK\Responses\V3\Contactdb\Status\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
