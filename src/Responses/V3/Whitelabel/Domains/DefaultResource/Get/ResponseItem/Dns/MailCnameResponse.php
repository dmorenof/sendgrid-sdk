<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Whitelabel\Domains\DefaultResource\Get\ResponseItem\Dns;

/**
 * The CNAME for your sending domain that points to sendgrid.net.
 */
final class MailCnameResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'data',
        'host',
        'type',
        'valid',
    ];

    /**
     * The CNAME record.
     */
    public string $data;
    /**
     * The domain that this CNAME is created for.
     * Format: hostname
     */
    public string $host;
    /**
     * The type of DNS record.
     */
    public string $type;
    /**
     * Indicates if this is a valid CNAME.
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
