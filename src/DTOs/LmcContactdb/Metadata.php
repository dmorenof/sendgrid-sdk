<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\LmcContactdb;

/**
 * metadata
 */
final class Metadata extends \Dmorenof\SdkRuntime\DTO
{
    protected const array PROPERTY_MAP = [
        'self' => 'self_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'self_' => 'self',
    ];

    /**
     * The number of items in the entire list, i.e., across all pages.
     */
    public float $count;
    /**
     * The URL of the next page of results. If this field isn't present, you're at the end of the list.
     * Format: uri
     */
    public string $next;
    /**
     * The URL of the previous page of results. If this field isn't present, you're at the start of the list.
     * Format: uri
     */
    public string $prev;
    /**
     * The URL of the current page of results.
     * Format: uri
     */
    public string $self_;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'count' => is_float($value) ? $this->count = $value : parent::assignMember($name, $value),
            'next' => is_string($value) ? $this->next = $value : parent::assignMember($name, $value),
            'prev' => is_string($value) ? $this->prev = $value : parent::assignMember($name, $value),
            'self' => is_string($value) ? $this->self_ = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
