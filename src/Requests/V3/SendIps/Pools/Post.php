<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\SendIps\Pools;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'name',
    ];

    protected const array VALIDATION = [
        'ips' => [
            'maxItems' => 100,
        ],
    ];

    /**
     * An array of IP addresses to assign to the IP Pool. All assignments must succeed.
     */
    public \SendGridSDK\Collections\StringCollection $ips {
        set {
            $this->assigning('ips', $value);
            $this->ips = $value;
        }
    }
    /**
     * The name to assign to the IP Pool. An IP Pool name cannot begin with a space or period.
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ips' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->ips = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
