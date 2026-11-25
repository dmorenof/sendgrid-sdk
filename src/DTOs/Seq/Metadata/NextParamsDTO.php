<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Seq\Metadata;

final class NextParamsDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The `after_key` property represents the last processed key. If the `after_key` property is `null`, there are no more entries available.
     */
    public string $after_key;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'after_key' => is_string($value) ? $this->after_key = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
