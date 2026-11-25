<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\Errors\V3\Ips\Pools\ByPoolName;

final class DeleteStatus404Response extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * An error explaining why the pool could not be deleted.
     */
    public string $error;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'error' => is_string($value) ? $this->error = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
