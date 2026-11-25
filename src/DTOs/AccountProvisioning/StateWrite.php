<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\AccountProvisioning;

/**
 * StateWrite
 * Example: {"state":"activated"}
 */
final class StateWrite extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'state',
    ];

    /**
     * The state of the account (e.g., `activated`, `deactivated`)
     */
    public \SendGridSDK\Enums\State1 $state;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'state' => is_string($value) ? $this->state = \SendGridSDK\Enums\State1::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
