<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\User\Account;

/**
 * GET User Account response
 */
final class Get extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'reputation',
        'type',
    ];

    /**
     * The sender reputation for this user.
     */
    public float $reputation;
    /**
     * The type of account for this user.
     */
    public \SendGridSDK\Enums\User\Type $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'reputation' => is_float($value) ? $this->reputation = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \SendGridSDK\Enums\User\Type::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
