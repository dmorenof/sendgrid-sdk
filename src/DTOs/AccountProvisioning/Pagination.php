<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\AccountProvisioning;

/**
 * Pagination
 * Example: {"last":"sg2a2bcd3ef4ab5c67d8efab91c01de2fa"}
 */
final class Pagination extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The last item returned
     */
    public string $last;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'last' => is_string($value) ? $this->last = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
