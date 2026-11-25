<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Whitelabel\Links\ById;

final class Validate extends \SendGridSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/whitelabel/links/{id}/validate',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            500 => '\\SendGridSDK\\Responses\\Errors\\V3\\Whitelabel\\Links\\ById\\Validate\\PostStatus500Response',
        ],
        'errorResponses' => [
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\V3\\Whitelabel\\Links\\ById\\Validate\\PostStatus500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Whitelabel\\Links\\ById\\Validate\\Post',
    ];

    /**
     * Validate a branded link
     *
     * **This endpoint allows you to validate a branded link.**
     *
     * You can submit this request as one of your subusers if you include their ID in the `on-behalf-of` header in the request.
     */
    public function post(int $id, ?\SendGridSDK\PostParams\V3\Whitelabel\Links\ById\Validate $params = null): \SendGridSDK\Responses\V3\Whitelabel\Links\ById\Validate\Post
    {
        /** @var \SendGridSDK\Responses\V3\Whitelabel\Links\ById\Validate\Post $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['id' => $id], parameters: $params);
        return $result;
    }
}
