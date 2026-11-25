<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Whitelabel\Domains\ByDomainId;

/**
 * Example: {"default":false,"custom_spf":true}
 */
final class Patch extends \Dmorenof\SdkRuntime\DTO
{
    protected const array PROPERTY_MAP = [
        'default' => 'default_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'default_' => 'default',
    ];

    /**
     * Indicates whether to generate a custom SPF record for manual security.
     */
    public bool $custom_spf;
    /**
     * Indicates whether this is the default authenticated domain.
     */
    public bool $default_;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'custom_spf' => is_bool($value) ? $this->custom_spf = $value : parent::assignMember($name, $value),
            'default' => is_bool($value) ? $this->default_ = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
