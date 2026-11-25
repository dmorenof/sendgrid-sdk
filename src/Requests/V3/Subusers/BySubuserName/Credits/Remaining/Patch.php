<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Subusers\BySubuserName\Credits\Remaining;

/**
 * Example: {"allocation_update":99}
 */
final class Patch extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'allocation_update',
    ];

    /**
     * The number of credits to add to or subtract from the current remaining credits for the Subuser. Use a positive number to increase the remaining credits or a negative number to reduce the remaining credits.
     */
    public int $allocation_update;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'allocation_update' => is_int($value) ? $this->allocation_update = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
