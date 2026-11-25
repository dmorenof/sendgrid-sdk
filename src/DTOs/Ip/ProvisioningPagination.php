<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Ip;

/**
 * Pagination
 * Example: {"last":"192.0.0.1"}
 */
final class ProvisioningPagination extends \Dmorenof\SdkRuntime\DTO
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
