<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Sso\Integrations\ByIntegrationId;

final class Certificates extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/sso/integrations/{integration_id}/certificates',
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
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Integrations\\ByIntegrationId\\Certificates\\CertificatesStatus400Collection',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Integrations\\ByIntegrationId\\Certificates\\CertificatesStatus401Collection',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Integrations\\ByIntegrationId\\Certificates\\CertificatesStatus403Collection',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Integrations\\ByIntegrationId\\Certificates\\CertificatesStatus429Collection',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Integrations\\ByIntegrationId\\Certificates\\CertificatesStatus500Collection',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Collections\\V3\\Sso\\Integrations\\ByIntegrationId\\Certificates\\Get\\ByIntegrationIdCertificatesCollection',
    ];

    /**
     * Get All SSO Certificates by Integration
     *
     * **This endpoint allows you to retrieve all your IdP configurations by configuration ID.**
     *
     * The `integration_id` expected by this endpoint is the `id` returned in the response by the "Get All SSO Integrations" endpoint.
     */
    public function get(string $integration_id): \SendGridSDK\Collections\V3\Sso\Integrations\ByIntegrationId\Certificates\Get\ByIntegrationIdCertificatesCollection
    {
        /** @var \SendGridSDK\Collections\V3\Sso\Integrations\ByIntegrationId\Certificates\Get\ByIntegrationIdCertificatesCollection $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['integration_id' => $integration_id]);
        return $result;
    }
}
