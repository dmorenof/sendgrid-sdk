<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Link;

/**
 * Link Branding 200 Response
 */
final class Branding200 extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'default_',
        'dns',
        'domain',
        'id',
        'legacy',
        'user_id',
        'username',
        'valid',
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
        'legacy' => [
            'jsonSchema' => '{"enum":[false,true]}',
        ],
        'valid' => [
            'jsonSchema' => '{"enum":[false,true]}',
        ],
    ];

    /**
     * Indicates if this is the default link branding.
     */
    public bool $default_ {
        set {
            $this->assigning('default_', $value);
            $this->default_ = $value;
        }
    }
    /**
     * The DNS records generated for this link branding.
     */
    public \SendGridSDK\DTOs\Link\Branding200\DnsDTO $dns;
    /**
     * The root domain of the branded link.
     */
    public string $domain;
    /**
     * The ID of the branded link.
     */
    public int $id;
    /**
     * Indicates if this link branding was created using the legacy whitelabel tool. If it is a legacy whitelabel, it will still function, but you'll need to create new link branding if you need to update it.
     */
    public bool $legacy {
        set {
            $this->assigning('legacy', $value);
            $this->legacy = $value;
        }
    }
    /**
     * The subdomain used to generate the DNS records for this link branding. This subdomain must be different from the subdomain used for your authenticated domain.
     */
    public string $subdomain;
    /**
     * The ID of the user that this link branding is associated with.
     */
    public int $user_id;
    /**
     * The username of the account that this link branding is associated with.
     */
    public string $username;
    /**
     * Indicates if this link branding is valid.
     */
    public bool $valid {
        set {
            $this->assigning('valid', $value);
            $this->valid = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'default' => is_bool($value) ? $this->default_ = $value : parent::assignMember($name, $value),
            'domain' => is_string($value) ? $this->domain = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'legacy' => is_bool($value) ? $this->legacy = $value : parent::assignMember($name, $value),
            'subdomain' => is_string($value) ? $this->subdomain = $value : parent::assignMember($name, $value),
            'user_id' => is_int($value) ? $this->user_id = $value : parent::assignMember($name, $value),
            'username' => is_string($value) ? $this->username = $value : parent::assignMember($name, $value),
            'valid' => is_bool($value) ? $this->valid = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
