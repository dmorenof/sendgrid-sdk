<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Sso;

final class Certificates extends \SendGridSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/sso/certificates',
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
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Certificates\\CertificatesStatus400Collection',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Certificates\\CertificatesStatus401Collection',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Certificates\\CertificatesStatus403Collection',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Certificates\\CertificatesStatus429Collection',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Certificates\\CertificatesStatus500Collection',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Sso\\CertificateBody',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Sso\\Certificates\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Create an SSO Certificate
     *
     * **This endpoint allows you to create an SSO certificate.**
     */
    public function post(?\SendGridSDK\Requests\V3\Sso\Certificates\Post $payload = null): \SendGridSDK\DTOs\Sso\CertificateBody
    {
        /** @var \SendGridSDK\DTOs\Sso\CertificateBody $result */
        $result = func_num_args() > 0 ? $this->executeBody(self::operation(self::POST), $payload) : $this->executeArguments(self::operation(self::POST));
        return $result;
    }

    private const array DELETE_BY_CERT_ID = [
        'method' => 'DELETE',
        'path' => '/v3/sso/certificates/{cert_id}',
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
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Certificates\\ByCertId\\ByCertIdStatus400Collection',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Certificates\\ByCertId\\ByCertIdStatus401Collection',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Certificates\\ByCertId\\ByCertIdStatus403Collection',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Certificates\\ByCertId\\ByCertIdStatus429Collection',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Certificates\\ByCertId\\ByCertIdStatus500Collection',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Sso\\CertificateBody',
    ];

    /**
     * Delete an SSO Certificate
     *
     * **This endpoint allows you to delete an SSO certificate.**
     *
     * You can retrieve a certificate's ID from the response provided by the "Get All SSO Integrations" endpoint.
     */
    public function deleteByCertId(string $cert_id): \SendGridSDK\DTOs\Sso\CertificateBody
    {
        /** @var \SendGridSDK\DTOs\Sso\CertificateBody $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_CERT_ID), path: ['cert_id' => $cert_id]);
        return $result;
    }

    private const array GET_BY_CERT_ID = [
        'method' => 'GET',
        'path' => '/v3/sso/certificates/{cert_id}',
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
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Certificates\\ByCertId\\GetStatus400Array\\ByCertIdStatus400Collection',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Certificates\\ByCertId\\GetStatus401Array\\ByCertIdStatus401Collection',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Certificates\\ByCertId\\GetStatus403Array\\ByCertIdStatus403Collection',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Certificates\\ByCertId\\GetStatus429Array\\ByCertIdStatus429Collection',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Certificates\\ByCertId\\GetStatus500Array\\ByCertIdStatus500Collection',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Sso\\CertificateBody',
    ];

    /**
     * Get an SSO Certificate
     *
     * **This endpoint allows you to retrieve an individual SSO certificate.**
     */
    public function getByCertId(string $cert_id): \SendGridSDK\DTOs\Sso\CertificateBody
    {
        /** @var \SendGridSDK\DTOs\Sso\CertificateBody $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_CERT_ID), path: ['cert_id' => $cert_id]);
        return $result;
    }

    private const array PATCH_BY_CERT_ID = [
        'method' => 'PATCH',
        'path' => '/v3/sso/certificates/{cert_id}',
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
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Certificates\\ByCertId\\PatchStatus400Array\\ByCertIdStatus400Collection',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Certificates\\ByCertId\\PatchStatus401Array\\ByCertIdStatus401Collection',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Certificates\\ByCertId\\PatchStatus403Array\\ByCertIdStatus403Collection',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Certificates\\ByCertId\\PatchStatus429Array\\ByCertIdStatus429Collection',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Collections\\Errors\\V3\\Sso\\Certificates\\ByCertId\\PatchStatus500Array\\ByCertIdStatus500Collection',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Sso\\CertificateBody',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Sso\\Certificates\\ByCertId\\Patch',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update SSO Certificate
     *
     * **This endpoint allows you to update an existing certificate by ID.**
     *
     * You can retrieve a certificate's ID from the response provided by the "Get All SSO Integrations" endpoint.
     */
    public function patchByCertId(string $cert_id, ?\SendGridSDK\Requests\V3\Sso\Certificates\ByCertId\Patch $payload = null): \SendGridSDK\DTOs\Sso\CertificateBody
    {
        /** @var \SendGridSDK\DTOs\Sso\CertificateBody $result */
        $result = func_num_args() > 1 ? $this->executeBody(self::operation(self::PATCH_BY_CERT_ID), $payload, path: ['cert_id' => $cert_id]) : $this->executeArguments(self::operation(self::PATCH_BY_CERT_ID), path: ['cert_id' => $cert_id]);
        return $result;
    }
}
