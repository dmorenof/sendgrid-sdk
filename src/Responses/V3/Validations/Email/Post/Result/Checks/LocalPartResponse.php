<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Validations\Email\Post\Result\Checks;

/**
 * Checks on the local part of the email address.
 */
final class LocalPartResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'is_suspected_role_address',
    ];

    /**
     * Whether the local part of email appears to be a role or group (e.g., hr, admin)
     */
    public bool $is_suspected_role_address;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'is_suspected_role_address' => is_bool($value) ? $this->is_suspected_role_address = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
