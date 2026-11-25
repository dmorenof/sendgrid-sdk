<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Contactdb\Recipients;

final class Count extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/contactdb/recipients/count',
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
        'responseType' => '\\SendGridSDK\\DTOs\\Contactdb\\RecipientCount200',
    ];

    /**
     * Retrieve a Count of Recipients
     *
     * **This endpoint allows you to retrieve the total number of Marketing Campaigns recipients.**
     */
    public function get(?\SendGridSDK\GetParams\V3\Contactdb\Recipients\Count $params = null): \SendGridSDK\DTOs\Contactdb\RecipientCount200
    {
        /** @var \SendGridSDK\DTOs\Contactdb\RecipientCount200 $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
