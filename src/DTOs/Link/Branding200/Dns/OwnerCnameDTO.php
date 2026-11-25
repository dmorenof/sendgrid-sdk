<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Link\Branding200\Dns;

/**
 * The DNS record generated to verify who created the link branding.
 */
final class OwnerCnameDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'data',
        'host',
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
     * Used to verify the link branding. The subdomain of this domain is the ID of the user who created the link branding.
     */
    public string $host;
    /**
     * The type of DNS record generated.
     */
    public \SendGridSDK\Enums\Link\BrandingType1 $type;
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
            'type' => is_string($value) ? $this->type = \SendGridSDK\Enums\Link\BrandingType1::from($value) : parent::assignMember($name, $value),
            'valid' => is_bool($value) ? $this->valid = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
