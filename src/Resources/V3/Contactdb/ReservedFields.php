<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Contactdb;

final class ReservedFields extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/contactdb/reserved_fields',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            401 => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Contactdb\\ReservedFields\\Get',
    ];

    /**
     * Retrieve reserved fields
     *
     * **This endpoint allows you to list all fields that are reserved and can't be used for custom field names.**
     */
    public function get(?\SendGridSDK\GetParams\V3\Contactdb\ReservedFields $params = null): \SendGridSDK\Responses\V3\Contactdb\ReservedFields\Get
    {
        /** @var \SendGridSDK\Responses\V3\Contactdb\ReservedFields\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
