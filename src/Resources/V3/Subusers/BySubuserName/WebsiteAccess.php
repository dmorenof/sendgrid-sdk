<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Subusers\BySubuserName;

final class WebsiteAccess extends \SendGridSDK\Client
{
    private const array PATCH = [
        'method' => 'PATCH',
        'path' => '/v3/subusers/{subuser_name}/website_access',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            204,
        ],
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Subusers\\BySubuserName\\WebsiteAccess\\Patch',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Enable/Disable website access for a Subuser
     *
     * Enable/Disable website access for a Subuser, while still preserving email send functionality.
     */
    public function patch(string $subuser_name, ?\SendGridSDK\Requests\V3\Subusers\BySubuserName\WebsiteAccess\Patch $payload = null): void
    {
        func_num_args() > 1 ? $this->executeBody(self::operation(self::PATCH), $payload, path: ['subuser_name' => $subuser_name]) : $this->executeArguments(self::operation(self::PATCH), path: ['subuser_name' => $subuser_name]);
        return;
    }
}
