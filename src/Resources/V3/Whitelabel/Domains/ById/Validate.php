<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Whitelabel\Domains\ById;

final class Validate extends \SendGridSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/whitelabel/domains/{id}/validate',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            500 => '\\SendGridSDK\\Responses\\Errors\\V3\\Whitelabel\\Domains\\ById\\Validate\\PostStatus500Response',
        ],
        'errorResponses' => [
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\V3\\Whitelabel\\Domains\\ById\\Validate\\PostStatus500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Whitelabel\\Domains\\ById\\Validate\\Post',
    ];

    /**
     * Validate a domain authentication.
     *
     * **This endpoint allows you to validate an authenticated domain. If it fails, it will return an error message describing why the domain could not be validated.**
     */
    public function post(int $id, ?\SendGridSDK\PostParams\V3\Whitelabel\Domains\ById\Validate $params = null): \SendGridSDK\Responses\V3\Whitelabel\Domains\ById\Validate\Post
    {
        /** @var \SendGridSDK\Responses\V3\Whitelabel\Domains\ById\Validate\Post $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['id' => $id], parameters: $params);
        return $result;
    }
}
