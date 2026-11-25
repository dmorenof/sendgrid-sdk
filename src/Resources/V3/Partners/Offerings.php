<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Partners;

final class Offerings extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/partners/offerings',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\Responses\\Errors\\Status400Variant14Response',
            401 => '\\SendGridSDK\\Responses\\Errors\\Status401Variant3Response',
            403 => '\\SendGridSDK\\Responses\\Errors\\Status403Variant3Response',
            404 => '\\SendGridSDK\\Responses\\Errors\\Status404Variant8Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Variant7Response',
            502 => '\\SendGridSDK\\Responses\\Errors\\Status502Response',
            503 => '\\SendGridSDK\\Responses\\Errors\\Status503Response',
            504 => '\\SendGridSDK\\Responses\\Errors\\Status504Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status400Variant14Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status401Variant3Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status403Variant3Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status404Variant8Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Variant7Response',
                'schemaNullable' => false,
            ],
            502 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status502Response',
                'schemaNullable' => false,
            ],
            503 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status503Response',
                'schemaNullable' => false,
            ],
            504 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status504Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\AccountProvisioning\\Catalog',
    ];

    /**
     * Get all available offerings
     *
     * Retrieves offerings available under the organization.
     */
    public function get(): \SendGridSDK\DTOs\AccountProvisioning\Catalog
    {
        /** @var \SendGridSDK\DTOs\AccountProvisioning\Catalog $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }
}
