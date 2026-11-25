<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Subusers\BySubuserName\Ips;

final class Put extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The IP addresses that are assigned to the subuser.
     */
    public \SendGridSDK\Collections\StringCollection $ips;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ips' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->ips = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
