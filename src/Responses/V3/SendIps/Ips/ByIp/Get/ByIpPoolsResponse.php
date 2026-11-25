<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\SendIps\Ips\ByIp\Get;

final class ByIpPoolsResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The ID of the IP Pool.
     */
    public string $id;
    /**
     * The name of the IP Pool.
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
