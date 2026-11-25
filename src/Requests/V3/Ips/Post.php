<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Ips;

/**
 * Example: {"count":90323478,"subusers":["subuser1","subuser2"],"warmup":true,"user_can_send":true}
 */
final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'count',
    ];

    /**
     * The amount of IPs to add to the account.
     */
    public int $count;
    /**
     * Array of usernames to be assigned a send IP.
     */
    public \SendGridSDK\Collections\StringCollection $subusers;
    /**
     * Whether or not to warmup the IPs being added.
     */
    public bool $warmup;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'count' => is_int($value) ? $this->count = $value : parent::assignMember($name, $value),
            'subusers' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->subusers = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'warmup' => is_bool($value) ? $this->warmup = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
