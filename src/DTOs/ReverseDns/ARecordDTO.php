<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\ReverseDns;

final class ARecordDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'data',
        'host',
        'type',
        'valid',
    ];

    /**
     * The IP address being set up with Reverse DNS.
     */
    public string $data;
    /**
     * This is the web address that will be mapped to the IP address.
     */
    public string $host;
    /**
     * The type of DNS record.
     */
    public string $type;
    /**
     * Indicates if the a_record is valid.
     */
    public bool $valid;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'data' => is_string($value) ? $this->data = $value : parent::assignMember($name, $value),
            'host' => is_string($value) ? $this->host = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            'valid' => is_bool($value) ? $this->valid = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
