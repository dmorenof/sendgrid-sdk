<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs;

/**
 * selfMetadata
 */
final class SelfMetadata extends \Dmorenof\SdkRuntime\DTO
{
    protected const array PROPERTY_MAP = [
        'self' => 'self_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'self_' => 'self',
    ];

    /**
     * A link to this object.
     */
    public string $self_;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'self' => is_string($value) ? $this->self_ = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
