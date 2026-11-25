<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Marketing\Contacts;

final class Count extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/marketing/contacts/count',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            401 => '\\SendGridSDK\\DTOs\\Mc\\ContactsError\\Response',
            403 => '\\SendGridSDK\\DTOs\\Mc\\ContactsError\\Response',
            404 => '\\SendGridSDK\\DTOs\\Mc\\ContactsError\\Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\Mc\\ContactsError\\Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\DTOs\\Mc\\ContactsError\\Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\Mc\\ContactsError\\Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Marketing\\Contacts\\Count\\Get',
    ];

    /**
     * Get Total Contact Count
     *
     * **This endpoint returns the total number of contacts you have stored.**
     *
     *
     * Twilio SendGrid recommends exporting your contacts regularly as a backup to avoid issues or lost data.
     */
    public function get(): \SendGridSDK\Responses\V3\Marketing\Contacts\Count\Get
    {
        /** @var \SendGridSDK\Responses\V3\Marketing\Contacts\Count\Get $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }
}
