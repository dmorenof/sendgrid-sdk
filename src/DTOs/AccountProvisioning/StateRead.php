<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\AccountProvisioning;

/**
 * StateRead
 * Example: {"state":"activated"}
 */
final class StateRead extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'state',
    ];

    /**
     * The state of the account (e.g., `activated`, `deactivated`, `suspended`, `banned`, or `indeterminate`)
     */
    public \SendGridSDK\Enums\State $state;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'state' => is_string($value) ? $this->state = \SendGridSDK\Enums\State::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
