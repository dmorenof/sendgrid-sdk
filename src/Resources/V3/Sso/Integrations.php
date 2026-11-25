<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Sso;

final class Integrations extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/sso/integrations',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => null,
            401 => null,
            403 => null,
            429 => null,
            500 => null,
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Integrations\\IntegrationsStatus400Collection',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Integrations\\IntegrationsStatus401Collection',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Integrations\\IntegrationsStatus403Collection',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Integrations\\IntegrationsStatus429Collection',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Integrations\\IntegrationsStatus500Collection',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Collections\\V3\\Sso\\Integrations\\Get\\SsoIntegrationsCollection',
    ];

    /**
     * Get All SSO Integrations
     *
     * **This endpoint allows you to retrieve all SSO integrations tied to your Twilio SendGrid account.**
     *
     * The IDs returned by this endpoint can be used by the APIs additional endpoints to modify your SSO integrations.
     */
    public function get(?\SendGridSDK\GetParams\V3\Sso\Integrations $params = null): \SendGridSDK\Collections\V3\Sso\Integrations\Get\SsoIntegrationsCollection
    {
        /** @var \SendGridSDK\Collections\V3\Sso\Integrations\Get\SsoIntegrationsCollection $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/sso/integrations',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => null,
            401 => null,
            403 => null,
            429 => null,
            500 => null,
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Integrations\\PostStatus400Array\\IntegrationsStatus400Collection',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Integrations\\PostStatus401Array\\IntegrationsStatus401Collection',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Integrations\\PostStatus403Array\\IntegrationsStatus403Collection',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Integrations\\PostStatus429Array\\IntegrationsStatus429Collection',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Integrations\\PostStatus500Array\\IntegrationsStatus500Collection',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Sso\\Integration',
        'requestBody' => [
            'type' => '\\SendGridSDK\\DTOs\\Post\\PatchIntegration\\Request',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Create an SSO Integration
     *
     * **This endpoint allows you to create an SSO integration.**
     */
    public function post(?\SendGridSDK\DTOs\Post\PatchIntegration\Request $payload = null): \SendGridSDK\DTOs\Sso\Integration
    {
        /** @var \SendGridSDK\DTOs\Sso\Integration $result */
        $result = func_num_args() > 0 ? $this->executeBody(self::operation(self::POST), $payload) : $this->executeArguments(self::operation(self::POST));
        return $result;
    }

    private const array DELETE_BY_ID = [
        'method' => 'DELETE',
        'path' => '/v3/sso/integrations/{id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            204,
        ],
        'errors' => [
            400 => null,
            401 => null,
            403 => null,
            429 => null,
            500 => null,
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Integrations\\ById\\ByIdStatus400Collection',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Integrations\\ById\\ByIdStatus401Collection',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Integrations\\ById\\ByIdStatus403Collection',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Integrations\\ById\\ByIdStatus429Collection',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Integrations\\ById\\ByIdStatus500Collection',
                'schemaNullable' => false,
            ],
        ],
    ];

    /**
     * Delete an SSO Integration
     *
     * **This endpoint allows you to delete an IdP configuration by ID.**
     *
     * You can retrieve the IDs for your configurations from the response provided by the "Get All SSO Integrations" endpoint.
     */
    public function deleteById(string $id): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_ID), path: ['id' => $id]);
        return;
    }

    private const array GET_BY_ID = [
        'method' => 'GET',
        'path' => '/v3/sso/integrations/{id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => null,
            401 => null,
            403 => null,
            429 => null,
            500 => null,
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Integrations\\ById\\GetStatus400Array\\ByIdStatus400Collection',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Integrations\\ById\\GetStatus401Array\\ByIdStatus401Collection',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Integrations\\ById\\GetStatus403Array\\ByIdStatus403Collection',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Integrations\\ById\\GetStatus429Array\\ByIdStatus429Collection',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Integrations\\ById\\GetStatus500Array\\ByIdStatus500Collection',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Sso\\Integration',
    ];

    /**
     * Get an SSO Integration
     *
     * **This endpoint allows you to retrieve an SSO integration by ID.**
     *
     * You can retrieve the IDs for your configurations from the response provided by the "Get All SSO Integrations" endpoint.
     */
    public function getById(string $id, ?\SendGridSDK\GetParams\V3\Sso\Integrations\ById $params = null): \SendGridSDK\DTOs\Sso\Integration
    {
        /** @var \SendGridSDK\DTOs\Sso\Integration $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_ID), path: ['id' => $id], parameters: $params);
        return $result;
    }

    private const array PATCH_BY_ID = [
        'method' => 'PATCH',
        'path' => '/v3/sso/integrations/{id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => null,
            401 => null,
            403 => null,
            429 => null,
            500 => null,
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Integrations\\ById\\PatchStatus400Array\\ByIdStatus400Collection',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Integrations\\ById\\PatchStatus401Array\\ByIdStatus401Collection',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Integrations\\ById\\PatchStatus403Array\\ByIdStatus403Collection',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Integrations\\ById\\PatchStatus429Array\\ByIdStatus429Collection',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Integrations\\ById\\PatchStatus500Array\\ByIdStatus500Collection',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Sso\\Integration',
        'requestBody' => [
            'type' => '\\SendGridSDK\\DTOs\\Post\\PatchIntegration\\Request',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update an SSO Integration
     *
     * **This endpoint allows you to modify an exisiting SSO integration.**
     *
     * You can retrieve the IDs for your configurations from the response provided by the "Get All SSO Integrations" endpoint.
     */
    public function patchById(string $id, ?\SendGridSDK\PatchParams\V3\Sso\Integrations\ById $params = null): \SendGridSDK\DTOs\Sso\Integration
    {
        /** @var \SendGridSDK\DTOs\Sso\Integration $result */
        $result = $this->executeArguments(self::operation(self::PATCH_BY_ID), path: ['id' => $id], parameters: $params);
        return $result;
    }
}
