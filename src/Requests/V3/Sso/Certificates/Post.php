<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Sso\Certificates;

/**
 * Example: {"public_certificate":"<your x509 certificate>","enabled":false,"integration_id":"b0b98502-9408-4b24-9e3d-31ed7cb15312"}
 */
final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'integration_id',
        'public_certificate',
    ];

    /**
     * Indicates if the certificate is enabled.
     */
    public bool $enabled;
    /**
     * An ID that matches a certificate to a specific IdP integration. This is the `id` returned by the "Get All SSO Integrations" endpoint.
     */
    public string $integration_id;
    /**
     * This public certificate allows SendGrid to verify that SAML requests it receives are signed by an IdP that it recognizes.
     */
    public string $public_certificate;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'integration_id' => is_string($value) ? $this->integration_id = $value : parent::assignMember($name, $value),
            'public_certificate' => is_string($value) ? $this->public_certificate = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
