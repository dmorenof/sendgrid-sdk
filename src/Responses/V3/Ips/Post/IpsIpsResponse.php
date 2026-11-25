<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Ips\Post;

final class IpsIpsResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'ip',
        'subusers',
    ];

    /**
     * IP added to account.
     */
    public string $ip;
    /**
     * Array of usernames assigned a send IP.
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
