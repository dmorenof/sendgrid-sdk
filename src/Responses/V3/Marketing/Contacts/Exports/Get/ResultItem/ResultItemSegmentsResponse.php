<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Marketing\Contacts\Exports\Get\ResultItem;

final class ResultItemSegmentsResponse extends \Dmorenof\SdkRuntime\DTO
{
    public string $ID;
    public string $Name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ID' => is_string($value) ? $this->ID = $value : parent::assignMember($name, $value),
            'Name' => is_string($value) ? $this->Name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
