<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\User\Webhooks\Security;

final class Policies extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/user/webhooks/security/policies',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\User\\Webhooks\\Security\\Policies\\Get',
    ];

    /**
     * Retrieve all webhook security policies for your account
     *
     * Returns a list of all webhook security policies configured for your account, including their IDs, names, and security configurations.
     */
    public function get(?\SendGridSDK\GetParams\V3\User\Webhooks\Security\Policies $params = null): \SendGridSDK\Responses\V3\User\Webhooks\Security\Policies\Get
    {
        /** @var \SendGridSDK\Responses\V3\User\Webhooks\Security\Policies\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/user/webhooks/security/policies',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\User\\Webhooks\\Security\\Policies\\Post',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\User\\Webhooks\\Security\\Policies\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Create a new webhook security policy
     *
     * Create a new webhook security policy. Note: One of signature or oauth must be given to have a valid security policy.
     *
     */
    public function post(?\SendGridSDK\PostParams\V3\User\Webhooks\Security\Policies $params = null): \SendGridSDK\Responses\V3\User\Webhooks\Security\Policies\Post
    {
        /** @var \SendGridSDK\Responses\V3\User\Webhooks\Security\Policies\Post $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

    private const array DELETE_BY_ID = [
        'method' => 'DELETE',
        'path' => '/v3/user/webhooks/security/policies/{id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\User\\Webhooks\\Security\\Policies\\ById\\Delete',
    ];

    /**
     * Delete a specific webhook security policy
     *
     * Permanently delete a webhook security policy by its ID.
     */
    public function deleteById(string $id, ?\SendGridSDK\DeleteParams\V3\User\Webhooks\Security\Policies\ById $params = null): \SendGridSDK\Responses\V3\User\Webhooks\Security\Policies\ById\Delete
    {
        /** @var \SendGridSDK\Responses\V3\User\Webhooks\Security\Policies\ById\Delete $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_ID), path: ['id' => $id], parameters: $params);
        return $result;
    }

    private const array GET_BY_ID = [
        'method' => 'GET',
        'path' => '/v3/user/webhooks/security/policies/{id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\User\\Webhooks\\Security\\Policies\\ById\\Get',
    ];

    /**
     * Retrieve a specific webhook security policy
     *
     * Retrieve the details of a specific webhook security policy by its ID.
     */
    public function getById(string $id, ?\SendGridSDK\GetParams\V3\User\Webhooks\Security\Policies\ById $params = null): \SendGridSDK\Responses\V3\User\Webhooks\Security\Policies\ById\Get
    {
        /** @var \SendGridSDK\Responses\V3\User\Webhooks\Security\Policies\ById\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_ID), path: ['id' => $id], parameters: $params);
        return $result;
    }

    private const array PATCH_BY_ID = [
        'method' => 'PATCH',
        'path' => '/v3/user/webhooks/security/policies/{id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\User\\Webhooks\\Security\\Policies\\ById\\Patch',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\User\\Webhooks\\Security\\Policies\\ById\\Patch',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update an existing webhook security policy
     *
     * Update an existing webhook security policy with new configuration values.
     */
    public function patchById(string $id, ?\SendGridSDK\PatchParams\V3\User\Webhooks\Security\Policies\ById $params = null): \SendGridSDK\Responses\V3\User\Webhooks\Security\Policies\ById\Patch
    {
        /** @var \SendGridSDK\Responses\V3\User\Webhooks\Security\Policies\ById\Patch $result */
        $result = $this->executeArguments(self::operation(self::PATCH_BY_ID), path: ['id' => $id], parameters: $params);
        return $result;
    }
}
