<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Contactdb\Segments\BySegmentId;

final class Recipients extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/contactdb/segments/{segment_id}/recipients',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\Responses\\Errors\\Status400Variant3Response',
            401 => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
            404 => '\\SendGridSDK\\Responses\\Errors\\Status404Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status400Variant3Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status404Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Contactdb\\Segments\\BySegmentId\\Recipients\\Get',
    ];

    /**
     * Retrieve recipients on a segment
     *
     * **This endpoint allows you to retrieve all of the recipients in a segment with the given ID.**
     */
    public function get(int $segment_id, ?\SendGridSDK\GetParams\V3\Contactdb\Segments\BySegmentId\Recipients $params = null): \SendGridSDK\Responses\V3\Contactdb\Segments\BySegmentId\Recipients\Get
    {
        /** @var \SendGridSDK\Responses\V3\Contactdb\Segments\BySegmentId\Recipients\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['segment_id' => $segment_id], parameters: $params);
        return $result;
    }
}
