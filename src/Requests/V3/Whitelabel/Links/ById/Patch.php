<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Whitelabel\Links\ById;

/**
 * Example: {"default":true}
 */
final class Patch extends \Dmorenof\SdkRuntime\DTO
{
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
     * Indicates if the branded link is set as the default. When setting a new default, the existing default link branding will have its default status removed automatically.
     */
    public bool $default_ {
        set {
            $this->assigning('default_', $value);
            $this->default_ = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'default' => is_bool($value) ? $this->default_ = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
