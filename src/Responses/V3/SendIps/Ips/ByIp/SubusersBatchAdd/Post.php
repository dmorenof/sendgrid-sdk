<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\SendIps\Ips\ByIp\SubusersBatchAdd;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The IP address the Subusers were assigned to.
     */
    public string $ip;
    /**
     * An array of Subuser IDs that were assigned to the specified IP address.
     */
    public \SendGridSDK\Collections\StringCollection $subusers;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ip' => is_string($value) ? $this->ip = $value : parent::assignMember($name, $value),
            'subusers' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->subusers = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
