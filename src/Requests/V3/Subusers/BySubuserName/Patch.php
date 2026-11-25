<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Subusers\BySubuserName;

/**
 * Example: {"disabled":false}
 */
final class Patch extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Whether or not this subuser is disabled. `true` means disabled, `false` means enabled.
     */
    public bool $disabled;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'disabled' => is_bool($value) ? $this->disabled = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
