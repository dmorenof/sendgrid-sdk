<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Link\Branding200\Dns;

/**
 * The DNS record generated to point to your link branding subdomain.
 */
final class DomainCnameDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'data',
        'host',
        'type',
        'valid',
    ];

    protected const array VALIDATION = [
        'valid' => [
            'jsonSchema' => '{"enum":[false,true]}',
        ],
    ];

    /**
     * The domain that the DNS record points to.
     */
    public string $data;
    /**
     * The domain that this link branding will use for the links in your email.
     */
    public string $host;
    /**
     * The type of DNS record that was generated.
     */
    public \SendGridSDK\Enums\Link\BrandingType $type;
    /**
     * Indicates if the DNS record is valid.
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
            'data' => is_string($value) ? $this->data = $value : parent::assignMember($name, $value),
            'host' => is_string($value) ? $this->host = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \SendGridSDK\Enums\Link\BrandingType::from($value) : parent::assignMember($name, $value),
            'valid' => is_bool($value) ? $this->valid = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
