<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Subusers\BySubuserName;

final class Credits extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/subusers/{subuser_name}/credits',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\Subusers\\Error\\Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\Subusers\\Error\\Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Subuser\\Credits',
    ];

    /**
     * Get the Credits for a Subuser
     *
     * **This endpoint allows you to retrieve a Credits overview for a Subuser.**
     */
    public function get(string $subuser_name): \SendGridSDK\DTOs\Subuser\Credits
    {
        /** @var \SendGridSDK\DTOs\Subuser\Credits $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['subuser_name' => $subuser_name]);
        return $result;
    }

    private const array PUT = [
        'method' => 'PUT',
        'path' => '/v3/subusers/{subuser_name}/credits',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\Subusers\\Error\\Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\Subusers\\Error\\Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Subuser\\Credits',
        'requestBody' => [
            'type' => '\\SendGridSDK\\DTOs\\Subuser\\Credits\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update the Credits for a Subuser
     *
     * **This endpoint allows you to update the Credits for a Subuser.**
     */
    public function put(string $subuser_name, \SendGridSDK\DTOs\Subuser\Credits\Request $payload): \SendGridSDK\DTOs\Subuser\Credits
    {
        /** @var \SendGridSDK\DTOs\Subuser\Credits $result */
        $result = $this->executeBody(self::operation(self::PUT), $payload, path: ['subuser_name' => $subuser_name]);
        return $result;
    }
}
