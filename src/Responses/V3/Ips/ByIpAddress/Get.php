<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Ips\ByIpAddress;

final class Get extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'ip',
        'pools',
        'rdns',
        'start_date',
        'subusers',
        'warmup',
        'whitelabeled',
    ];

    /**
     * The IP address.
     */
    public string $ip;
    /**
     * The list of IP pools that this IP address belongs to.
     */
    public \SendGridSDK\Collections\StringCollection $pools;
    /**
     * The reverse DNS record for this IP address.
     */
    public string $rdns;
    /**
     * The date that the IP address was entered into warmup.
     */
    public ?int $start_date;
    /**
     * The subusers that can send email using this IP address.
     */
    public \SendGridSDK\Collections\StringCollection $subusers;
    /**
     * Indicates if this IP address is currently warming up.
     */
    public bool $warmup;
    /**
     * Indicates if this IP address is associated with a reverse DNS record.
     */
    public bool $whitelabeled;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ip' => is_string($value) ? $this->ip = $value : parent::assignMember($name, $value),
            'pools' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->pools = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'rdns' => is_string($value) ? $this->rdns = $value : parent::assignMember($name, $value),
            'start_date' => $value === null || is_int($value) ? $this->start_date = $value : parent::assignMember($name, $value),
            'subusers' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->subusers = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'warmup' => is_bool($value) ? $this->warmup = $value : parent::assignMember($name, $value),
            'whitelabeled' => is_bool($value) ? $this->whitelabeled = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
