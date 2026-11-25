<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Teammates;

final class Pending extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/teammates/pending',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Teammates\\Pending\\Get',
    ];

    /**
     * Retrieve all pending teammates
     *
     * **This endpoint allows you to retrieve a list of all pending Teammate invitations.**
     *
     * Each teammate invitation is valid for 7 days. Users may resend the invitation to refresh the expiration date.
     */
    public function get(?\SendGridSDK\GetParams\V3\Teammates\Pending $params = null): \SendGridSDK\Responses\V3\Teammates\Pending\Get
    {
        /** @var \SendGridSDK\Responses\V3\Teammates\Pending\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array DELETE_BY_TOKEN = [
        'method' => 'DELETE',
        'path' => '/v3/teammates/pending/{token}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            204,
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
    ];

    /**
     * Delete pending teammate
     *
     * **This endpoint allows you to delete a pending teammate invite.**
     */
    public function deleteByToken(string $token, ?\SendGridSDK\DeleteParams\V3\Teammates\Pending\ByToken $params = null): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_TOKEN), path: ['token' => $token], parameters: $params);
        return;
    }
}
