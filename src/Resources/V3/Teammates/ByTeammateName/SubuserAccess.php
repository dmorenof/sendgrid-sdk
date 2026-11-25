<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Teammates\ByTeammateName;

final class SubuserAccess extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/teammates/{teammate_name}/subuser_access',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\Responses\\Errors\\V3\\Teammates\\ByTeammateName\\SubuserAccess\\GetStatus400Response',
            401 => '\\SendGridSDK\\Responses\\Errors\\V3\\Teammates\\ByTeammateName\\SubuserAccess\\GetStatus401Response',
            403 => '\\SendGridSDK\\Responses\\Errors\\V3\\Teammates\\ByTeammateName\\SubuserAccess\\GetStatus403Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\V3\\Teammates\\ByTeammateName\\SubuserAccess\\GetStatus500Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\V3\\Teammates\\ByTeammateName\\SubuserAccess\\GetStatus400Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\V3\\Teammates\\ByTeammateName\\SubuserAccess\\GetStatus401Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\V3\\Teammates\\ByTeammateName\\SubuserAccess\\GetStatus403Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\V3\\Teammates\\ByTeammateName\\SubuserAccess\\GetStatus500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Teammates\\ByTeammateName\\SubuserAccess\\Get',
    ];

    /**
     * Get Teammate Subuser Access
     *
     * **This operation allows you to retrieve the Subusers that can be accessed by a specified Teammate.**
     *
     * This operation will return the Subusers available to a Teammate, including the scopes available. If the Teammate is an administrator, all Subusers will be returned.
     */
    public function get(string $teammate_name, ?\SendGridSDK\GetParams\V3\Teammates\ByTeammateName\SubuserAccess $params = null): \SendGridSDK\Responses\V3\Teammates\ByTeammateName\SubuserAccess\Get
    {
        /** @var \SendGridSDK\Responses\V3\Teammates\ByTeammateName\SubuserAccess\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['teammate_name' => $teammate_name], parameters: $params);
        return $result;
    }
}
