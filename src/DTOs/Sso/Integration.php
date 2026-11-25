<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Sso;

/**
 * Single Sign-On Integration
 */
final class Integration extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'enabled',
        'entity_id',
        'last_updated',
        'name',
        'signin_url',
        'signout_url',
    ];

    /**
     * The URL where your IdP should POST its SAML response. This is the Twilio SendGrid URL that is responsible for receiving and parsing a SAML assertion. This is the same URL as the Single Sign-On URL when using SendGrid.
     */
    public string $audience_url;
    /**
     * Indicates if the integration is complete.
     */
    public bool $completed_integration;
    /**
     * Indicates if the integration is enabled.
     */
    public bool $enabled;
    /**
     * An identifier provided by your IdP to identify Twilio SendGrid in the SAML interaction. This is called the "SAML Issuer ID" in the Twilio SendGrid UI.
     */
    public string $entity_id;
    /**
     * A unique ID assigned to the configuration by SendGrid.
     */
    public string $id;
    /**
     * A timestamp representing the last time the configuration was modified.
     */
    public float $last_updated;
    /**
     * The name of your integration. This name can be anything that makes sense for your organization (eg. Twilio SendGrid)
     */
    public string $name;
    /**
     * The IdP's SAML POST endpoint. This endpoint should receive requests and initiate an SSO login flow. This is called the "Embed Link" in the Twilio SendGrid UI.
     */
    public string $signin_url;
    /**
     * This URL is relevant only for an IdP-initiated authentication flow. If a user authenticates from their IdP, this URL will return them to their IdP when logging out.
     */
    public string $signout_url;
    /**
     * The URL where your IdP should POST its SAML response. This is the Twilio SendGrid URL that is responsible for receiving and parsing a SAML assertion. This is the same URL as the Audience URL when using SendGrid.
     */
    public string $single_signon_url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'audience_url' => is_string($value) ? $this->audience_url = $value : parent::assignMember($name, $value),
            'completed_integration' => is_bool($value) ? $this->completed_integration = $value : parent::assignMember($name, $value),
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'entity_id' => is_string($value) ? $this->entity_id = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'last_updated' => is_float($value) ? $this->last_updated = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'signin_url' => is_string($value) ? $this->signin_url = $value : parent::assignMember($name, $value),
            'signout_url' => is_string($value) ? $this->signout_url = $value : parent::assignMember($name, $value),
            'single_signon_url' => is_string($value) ? $this->single_signon_url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
