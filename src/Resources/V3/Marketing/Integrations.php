<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Marketing;

final class Integrations extends \SendGridSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/v3/marketing/integrations',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            204,
        ],
        'errors' => [
            400 => '\\SendGridSDK\\Responses\\Errors\\V3\\Marketing\\Integrations\\DeleteStatus400Response',
            403 => '\\SendGridSDK\\Responses\\Errors\\Status403Variant2Response',
            404 => '\\SendGridSDK\\Responses\\Errors\\Status404Variant4Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Variant4Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\V3\\Marketing\\Integrations\\DeleteStatus400Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status403Variant2Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status404Variant4Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Variant4Response',
                'schemaNullable' => false,
            ],
        ],
        'querySerialization' => [
            'ids' => 'multi',
        ],
    ];

    /**
     * DeleteBulkIntegration
     *
     * This endpoint deletes Integrations.
     */
    public function delete(\SendGridSDK\DeleteParams\V3\Marketing\Integrations $params): void
    {
        $this->executeArguments(self::operation(self::DELETE), parameters: $params);
        return;
    }

    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/marketing/integrations',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            403 => '\\SendGridSDK\\Responses\\Errors\\Status403Variant2Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Variant4Response',
        ],
        'errorResponses' => [
            403 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status403Variant2Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Variant4Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Marketing\\Integrations\\Get',
    ];

    /**
     * ListIntegration
     *
     * This endpoint returns all the Integrations for the user making this call.
     */
    public function get(): \SendGridSDK\Responses\V3\Marketing\Integrations\Get
    {
        /** @var \SendGridSDK\Responses\V3\Marketing\Integrations\Get $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/marketing/integrations',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'errors' => [
            400 => '\\SendGridSDK\\Responses\\Errors\\Status400Variant10Response',
            403 => '\\SendGridSDK\\Responses\\Errors\\Status403Variant2Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Variant4Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status400Variant10Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status403Variant2Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Variant4Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Integration',
        'requestBody' => [
            'type' => '\\SendGridSDK\\DTOs\\Integration\\Input',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * CreateIntegration
     *
     * This endpoint creates an Integration for email event forwarding. Each Integration has a maximum number of allowed Integration instances per user. For example, users can create up to 10 Segment Integrations.
     */
    public function post(\SendGridSDK\DTOs\Integration\Input $payload): \SendGridSDK\DTOs\Integration
    {
        /** @var \SendGridSDK\DTOs\Integration $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

    private const array GET_BY_ID = [
        'method' => 'GET',
        'path' => '/v3/marketing/integrations/{id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            403 => '\\SendGridSDK\\Responses\\Errors\\Status403Variant2Response',
            404 => '\\SendGridSDK\\Responses\\Errors\\Status404Variant4Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Variant4Response',
        ],
        'errorResponses' => [
            403 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status403Variant2Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status404Variant4Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Variant4Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Integration',
    ];

    /**
     * GetIntegration
     *
     * This endpoint returns the data for a specific Integration.
     */
    public function getById(string $id): \SendGridSDK\DTOs\Integration
    {
        /** @var \SendGridSDK\DTOs\Integration $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_ID), path: ['id' => $id]);
        return $result;
    }

    private const array PATCH_BY_ID = [
        'method' => 'PATCH',
        'path' => '/v3/marketing/integrations/{id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\Responses\\Errors\\Status400Variant10Response',
            403 => '\\SendGridSDK\\Responses\\Errors\\Status403Variant2Response',
            404 => '\\SendGridSDK\\Responses\\Errors\\Status404Variant4Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Variant4Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status400Variant10Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status403Variant2Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status404Variant4Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Variant4Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Integration',
        'requestBody' => [
            'type' => '\\SendGridSDK\\DTOs\\Integration\\Patch',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * UpdateIntegration
     *
     * This endpoint updates an existing Integration.
     */
    public function patchById(string $id, \SendGridSDK\DTOs\Integration\Patch $payload): \SendGridSDK\DTOs\Integration
    {
        /** @var \SendGridSDK\DTOs\Integration $result */
        $result = $this->executeBody(self::operation(self::PATCH_BY_ID), $payload, path: ['id' => $id]);
        return $result;
    }
}
