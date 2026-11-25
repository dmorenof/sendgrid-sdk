<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\SendIps\Pools;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The unique ID of the IP Pool.
     */
    public string $id;
    /**
     * An array of IP addresses assigned to the IP Pool. All assignments must succeed.
     */
    public \SendGridSDK\Collections\StringCollection $ips;
    /**
     * The name assigned to the IP Pool.
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'ips' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->ips = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
