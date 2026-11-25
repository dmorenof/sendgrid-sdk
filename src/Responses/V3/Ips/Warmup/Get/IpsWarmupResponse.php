<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Ips\Warmup\Get;

final class IpsWarmupResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'ip',
        'start_date',
    ];

    /**
     * The IP address.
     */
    public string $ip;
    /**
     * A Unix timestamp indicating when the IP address entered warmup mode.
     */
    public int $start_date;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ip' => is_string($value) ? $this->ip = $value : parent::assignMember($name, $value),
            'start_date' => is_int($value) ? $this->start_date = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
