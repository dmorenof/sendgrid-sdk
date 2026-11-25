<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Subusers\Reputations\Get;

final class SubusersReputationsResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'reputation',
        'username',
    ];

    /**
     * The sender reputation this subuser has attained.
     */
    public float $reputation;
    /**
     * The subuser that has this reputation.
     */
    public string $username;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'reputation' => is_float($value) ? $this->reputation = $value : parent::assignMember($name, $value),
            'username' => is_string($value) ? $this->username = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
