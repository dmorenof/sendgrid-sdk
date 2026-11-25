<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Sso;

/**
 * Single Sign-On Certificate Body
 * Example: {"public_certificate":"<your x509 certificate>","id":66138975,"not_before":1621289880,"not_after":1621289880,"intergration_id":"b0b98502-9408-4b24-9e3d-31ed7cb15312"}
 */
final class CertificateBody extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * A unique ID assigned to the certificate by SendGrid.
     */
    public float $id;
    /**
     * An ID that matches a certificate to a specific IdP integration.
     */
    public string $intergration_id;
    /**
     * A unix timestamp (e.g., 1603915954) that indicates the time after which the certificate is no longer valid.
     */
    public float $not_after;
    /**
     * A unix timestamp (e.g., 1603915954) that indicates the time before which the certificate is not valid.
     */
    public float $not_before;
    /**
     * This certificate is used by Twilio SendGrid to verify that SAML requests are coming from Okta. This is called the X509 certificate in the Twilio SendGrid UI.
     */
    public string $public_certificate;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_float($value) ? $this->id = $value : parent::assignMember($name, $value),
            'intergration_id' => is_string($value) ? $this->intergration_id = $value : parent::assignMember($name, $value),
            'not_after' => is_float($value) ? $this->not_after = $value : parent::assignMember($name, $value),
            'not_before' => is_float($value) ? $this->not_before = $value : parent::assignMember($name, $value),
            'public_certificate' => is_string($value) ? $this->public_certificate = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
