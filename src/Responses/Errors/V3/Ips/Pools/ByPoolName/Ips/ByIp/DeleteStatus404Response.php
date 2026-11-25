<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\Errors\V3\Ips\Pools\ByPoolName\Ips\ByIp;

final class DeleteStatus404Response extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * An error explaining why the IP address could not be removed from the IP pool.
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
