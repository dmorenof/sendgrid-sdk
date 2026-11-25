<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Contactdb\Recipients\ByRecipientId;

final class Lists extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/contactdb/recipients/{recipient_id}/lists',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
            401 => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
            404 => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Contactdb\\Recipients\\ByRecipientId\\Lists\\Get',
    ];

    /**
     * Retrieve the lists that a recipient is on
     *
     * **This endpoint allows you to retrieve the lists that a given recipient belongs to.**
     *
     * Each recipient can be on many lists. This endpoint gives you all of the lists that any one recipient has been added to.
     */
    public function get(string $recipient_id, ?\SendGridSDK\GetParams\V3\Contactdb\Recipients\ByRecipientId\Lists $params = null): \SendGridSDK\Responses\V3\Contactdb\Recipients\ByRecipientId\Lists\Get
    {
        /** @var \SendGridSDK\Responses\V3\Contactdb\Recipients\ByRecipientId\Lists\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['recipient_id' => $recipient_id], parameters: $params);
        return $result;
    }
}
