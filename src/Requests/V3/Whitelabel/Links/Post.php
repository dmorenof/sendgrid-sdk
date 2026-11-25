<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Whitelabel\Links;

/**
 * Example: {"domain":"example.com","subdomain":"mail","default":true}
 */
final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'domain',
    ];

    protected const array PROPERTY_MAP = [
        'default' => 'default_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'default_' => 'default',
    ];

    protected const array VALIDATION = [
        'default_' => [
            'jsonSchema' => '{"enum":[false,true]}',
        ],
    ];

    /**
     * Indicates if you want to use this link branding as the default or fallback. When setting a new default, the existing default link branding will have its default status removed automatically.
     */
    public bool $default_ {
        set {
            $this->assigning('default_', $value);
            $this->default_ = $value;
        }
    }
    /**
     * The root domain for the subdomain that you are creating the link branding for. This should match your FROM email address.
     */
    public string $domain;
    /**
     * The region of the IP address. Can be `eu` or `us`.
     */
    public \SendGridSDK\Enums\Link\BrandingRegion $region;
    /**
     * The subdomain to create the link branding for. Must be different from the subdomain you used for authenticating your domain.
     */
    public string $subdomain;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'default' => is_bool($value) ? $this->default_ = $value : parent::assignMember($name, $value),
            'domain' => is_string($value) ? $this->domain = $value : parent::assignMember($name, $value),
            'region' => is_string($value) ? $this->region = \SendGridSDK\Enums\Link\BrandingRegion::from($value) : parent::assignMember($name, $value),
            'subdomain' => is_string($value) ? $this->subdomain = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
