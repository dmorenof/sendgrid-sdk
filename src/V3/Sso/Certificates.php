<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Sso;

final class Certificates extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** POST /v3/sso/certificates [operationId: CreateSsoCertificate] */
    /**
     * Create an SSO Certificate
     *
     * **This endpoint allows you to create an SSO certificate.**
     */
    public static function post(?\SendGridSDK\Requests\V3\Sso\Certificates\Post $payload = null): \SendGridSDK\DTOs\Sso\CertificateBody
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\SendGridSDK\Resources\V3\Sso\Certificates::class)->post();
        }
        return self::client()->resource(\SendGridSDK\Resources\V3\Sso\Certificates::class)->post($payload);
    }

    /** DELETE /v3/sso/certificates/{cert_id} [operationId: DeleteSsoCertificate] */
    /**
     * Delete an SSO Certificate
     *
     * **This endpoint allows you to delete an SSO certificate.**
     *
     * You can retrieve a certificate's ID from the response provided by the "Get All SSO Integrations" endpoint.
     */
    public static function deleteByCertId(string $cert_id): \SendGridSDK\DTOs\Sso\CertificateBody
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Sso\Certificates::class)->deleteByCertId($cert_id);
    }

    /** GET /v3/sso/certificates/{cert_id} [operationId: GetSsoCertificate] */
    /**
     * Get an SSO Certificate
     *
     * **This endpoint allows you to retrieve an individual SSO certificate.**
     */
    public static function getByCertId(string $cert_id): \SendGridSDK\DTOs\Sso\CertificateBody
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Sso\Certificates::class)->getByCertId($cert_id);
    }

    /** PATCH /v3/sso/certificates/{cert_id} [operationId: UpdateSsoCertificate] */
    /**
     * Update SSO Certificate
     *
     * **This endpoint allows you to update an existing certificate by ID.**
     *
     * You can retrieve a certificate's ID from the response provided by the "Get All SSO Integrations" endpoint.
     */
    public static function patchByCertId(string $cert_id, ?\SendGridSDK\Requests\V3\Sso\Certificates\ByCertId\Patch $payload = null): \SendGridSDK\DTOs\Sso\CertificateBody
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\SendGridSDK\Resources\V3\Sso\Certificates::class)->patchByCertId($cert_id);
        }
        return self::client()->resource(\SendGridSDK\Resources\V3\Sso\Certificates::class)->patchByCertId($cert_id, $payload);
    }
}
