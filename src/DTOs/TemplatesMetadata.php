<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs;

/**
 * _metadata
 */
final class TemplatesMetadata extends \Dmorenof\SdkRuntime\DTO
{
    protected const array PROPERTY_MAP = [
        'self' => 'self_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'self_' => 'self',
    ];

    protected const array VALIDATION = [
        'count' => [
            'minimum' => 0,
        ],
    ];

    public int $count {
        set {
            $this->assigning('count', $value);
            $this->count = $value;
        }
    }
    /**
     * Format: uri
     */
    public string $next;
    /**
     * Format: uri
     */
    public string $prev;
    /**
     * Format: uri
     */
    public string $self_;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'count' => is_int($value) ? $this->count = $value : parent::assignMember($name, $value),
            'next' => is_string($value) ? $this->next = $value : parent::assignMember($name, $value),
            'prev' => is_string($value) ? $this->prev = $value : parent::assignMember($name, $value),
            'self' => is_string($value) ? $this->self_ = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
