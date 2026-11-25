<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Marketing\Contacts\Exports\Get\ResultItem;

final class ResultItemMetadataResponse extends \Dmorenof\SdkRuntime\DTO
{
    protected const array PROPERTY_MAP = [
        'self' => 'self_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'self_' => 'self',
    ];

    public string $next;
    public string $prev;
    public string $self_;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'next' => is_string($value) ? $this->next = $value : parent::assignMember($name, $value),
            'prev' => is_string($value) ? $this->prev = $value : parent::assignMember($name, $value),
            'self' => is_string($value) ? $this->self_ = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
