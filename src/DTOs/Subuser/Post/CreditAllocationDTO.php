<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Subuser\Post;

final class CreditAllocationDTO extends \Dmorenof\SdkRuntime\DTO
{
    public string $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
