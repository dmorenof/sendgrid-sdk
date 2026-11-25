<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\OutboundIp;

/**
 * Outbound IP Pool metadata
 */
final class PoolMetadata extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'id' => [
            'pattern' => '^[0-9]+$',
        ],
    ];

    /**
     * IP Pool ID, as a numeric string
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * IP Pool name
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
