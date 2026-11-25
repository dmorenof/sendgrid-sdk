<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\User;

final class Profile extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/user/profile',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\User\\Profile\\Get',
    ];

    /**
     * Get a user's profile
     *
     * **This endpoint allows you to retrieve your current profile details.**
     */
    public function get(?\SendGridSDK\GetParams\V3\User\Profile $params = null): \SendGridSDK\Responses\V3\User\Profile\Get
    {
        /** @var \SendGridSDK\Responses\V3\User\Profile\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array PATCH = [
        'method' => 'PATCH',
        'path' => '/v3/user/profile',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            401 => '\\SendGridSDK\\DTOs\\User\\Error\\Response',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\User\\Error\\Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\User\\Profile',
        'requestBody' => [
            'type' => '\\SendGridSDK\\DTOs\\User\\Profile',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update a user's profile
     *
     * **This endpoint allows you to update your current profile details.**
     *
     * Any one or more of the parameters can be updated via the PATCH `/user/profile` endpoint. You must include at least one when you PATCH.
     */
    public function patch(?\SendGridSDK\PatchParams\V3\User\Profile $params = null): \SendGridSDK\DTOs\User\Profile
    {
        /** @var \SendGridSDK\DTOs\User\Profile $result */
        $result = $this->executeArguments(self::operation(self::PATCH), parameters: $params);
        return $result;
    }
}
