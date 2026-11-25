<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Subusers\BySubuserName\WebsiteAccess;

/**
 * Example: {"disabled":true}
 */
final class Patch extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Whether or not to disable website access to the Subuser. `true` means disabled, `false` means enabled.
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
