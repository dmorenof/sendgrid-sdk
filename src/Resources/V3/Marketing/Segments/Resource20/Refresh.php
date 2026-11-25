<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Marketing\Segments\Resource20;

final class Refresh extends \SendGridSDK\Client
{
    private const array POST_BY_SEGMENT_ID = [
        'method' => 'POST',
        'path' => '/v3/marketing/segments/2.0/refresh/{segment_id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            202,
        ],
        'errors' => [
            403 => null,
            404 => '\\SendGridSDK\\DTOs\\Segment\\Error',
            429 => null,
            500 => '\\SendGridSDK\\DTOs\\Segment\\Error',
        ],
        'errorResponses' => [
            403 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\Segment\\Error',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\DTOs\\Segment\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Segment\\Refresh202',
        'validation' => [
            'segment_id' => [
                'minLength' => 36,
                'maxLength' => 36,
            ],
        ],
        'requestBody' => [
            'type' => '\\SendGridSDK\\DTOs\\Segment\\Refresh\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Manually refresh a segment
     *
     * Manually refresh a segment by segment ID.
     */
    public function postBySegmentId(string $segment_id, \SendGridSDK\DTOs\Segment\Refresh\Request $payload): \SendGridSDK\DTOs\Segment\Refresh202
    {
        /** @var \SendGridSDK\DTOs\Segment\Refresh202 $result */
        $result = $this->executeBody(self::operation(self::POST_BY_SEGMENT_ID), $payload, path: ['segment_id' => $segment_id]);
        return $result;
    }
}
