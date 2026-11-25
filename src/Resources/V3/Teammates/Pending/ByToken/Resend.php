<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Teammates\Pending\ByToken;

final class Resend extends \SendGridSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/teammates/pending/{token}/resend',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            404 => '\\SendGridSDK\\Responses\\Errors\\Status404Variant7Response',
        ],
        'errorResponses' => [
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status404Variant7Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Teammates\\Pending\\ByToken\\Resend\\Post',
    ];

    /**
     * Resend teammate invite
     *
     * **This endpoint allows you to resend a Teammate invitation.**
     *
     * Teammate invitations will expire after 7 days. Resending an invitation will reset the expiration date.
     */
    public function post(string $token, ?\SendGridSDK\PostParams\V3\Teammates\Pending\ByToken\Resend $params = null): \SendGridSDK\Responses\V3\Teammates\Pending\ByToken\Resend\Post
    {
        /** @var \SendGridSDK\Responses\V3\Teammates\Pending\ByToken\Resend\Post $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['token' => $token], parameters: $params);
        return $result;
    }
}
