<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs;

/**
 * Enforced TLS Request Response
 * Example: {"require_tls":true,"require_valid_cert":true,"version":1.1}
 */
final class EnforcedTlsRequestResponse extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'version' => [
            'jsonSchema' => '{"enum":[1.1,1.2,1.3]}',
        ],
    ];

    /**
     * Indicates if you want to require your recipients to support TLS.
     */
    public bool $require_tls;
    /**
     * Indicates if you want to require your recipients to have a valid certificate.
     */
    public bool $require_valid_cert;
    /**
     * The minimum required TLS certificate version.
     */
    public float $version {
        set {
            $this->assigning('version', $value);
            $this->version = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'require_tls' => is_bool($value) ? $this->require_tls = $value : parent::assignMember($name, $value),
            'require_valid_cert' => is_bool($value) ? $this->require_valid_cert = $value : parent::assignMember($name, $value),
            'version' => is_float($value) ? $this->version = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
