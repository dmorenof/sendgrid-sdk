<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Subusers\BySubuserName\Credits;

final class Remaining extends \SendGridSDK\Client
{
    private const array PATCH = [
        'method' => 'PATCH',
        'path' => '/v3/subusers/{subuser_name}/credits/remaining',
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
            'type' => '\\SendGridSDK\\Requests\\V3\\Subusers\\BySubuserName\\Credits\\Remaining\\Patch',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update the remaining credits for a Subuser
     *
     * **This endpoint allows you to update the remaining credits for a Subuser.**
     */
    public function patch(string $subuser_name, \SendGridSDK\Requests\V3\Subusers\BySubuserName\Credits\Remaining\Patch $payload): \SendGridSDK\DTOs\Subuser\Credits
    {
        /** @var \SendGridSDK\DTOs\Subuser\Credits $result */
        $result = $this->executeBody(self::operation(self::PATCH), $payload, path: ['subuser_name' => $subuser_name]);
        return $result;
    }
}
