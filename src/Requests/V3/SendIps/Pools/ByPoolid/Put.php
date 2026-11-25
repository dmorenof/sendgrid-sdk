<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\SendIps\Pools\ByPoolid;

final class Put extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'name',
    ];

    /**
     * The name to assign to the IP Pool. An IP Pool name cannot begin with a space or period.
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
