<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Contactdb\Recipients;

final class BillableCount extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/contactdb/recipients/billable_count',
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
     * Retrieve the count of billable recipients
     *
     * **This endpoint allows you to retrieve the number of Marketing Campaigns recipients that you will be billed for.**
     *
     * You are billed for marketing campaigns based on the highest number of recipients you have had in your account at one time. This endpoint will allow you to know the current billable count value.
     */
    public function get(?\SendGridSDK\GetParams\V3\Contactdb\Recipients\BillableCount $params = null): \SendGridSDK\DTOs\Contactdb\RecipientCount200
    {
        /** @var \SendGridSDK\DTOs\Contactdb\RecipientCount200 $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
