<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Marketing\Lists\ById\Contacts\Count;

final class Get extends \Dmorenof\SdkRuntime\DTO
{
    public int $billable_count;
    public int $contact_count;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'billable_count' => is_int($value) ? $this->billable_count = $value : parent::assignMember($name, $value),
            'contact_count' => is_int($value) ? $this->contact_count = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
