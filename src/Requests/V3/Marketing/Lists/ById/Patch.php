<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Marketing\Lists\ById;

/**
 * Example: {"name":"updated-list-name"}
 */
final class Patch extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Your name for your list.
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
