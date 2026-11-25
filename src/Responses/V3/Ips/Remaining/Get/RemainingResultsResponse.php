<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Ips\Remaining\Get;

final class RemainingResultsResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'period',
        'price_per_ip',
        'remaining',
    ];

    /**
     * The length of time until user can add more IPs.
     */
    public string $period;
    /**
     * The current cost to add an IP.
     */
    public float $price_per_ip;
    /**
     * The number of IPs that can still be added to the user.
     */
    public int $remaining;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'period' => is_string($value) ? $this->period = $value : parent::assignMember($name, $value),
            'price_per_ip' => is_float($value) ? $this->price_per_ip = $value : parent::assignMember($name, $value),
            'remaining' => is_int($value) ? $this->remaining = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
