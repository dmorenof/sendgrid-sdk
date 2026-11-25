<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\SendIps\Ips\ByIp\SubusersBatchDelete;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'subusers',
    ];

    /**
     * An array of Subuser IDs to be removed from the specified IP address.
     */
    public \SendGridSDK\Collections\StringCollection $subusers;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'subusers' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->subusers = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
