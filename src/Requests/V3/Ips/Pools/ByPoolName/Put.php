<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Ips\Pools\ByPoolName;

/**
 * Example: {"name":"new_pool_name"}
 */
final class Put extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'name' => [
            'maxLength' => 64,
        ],
    ];

    /**
     * The new name for your IP pool.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
