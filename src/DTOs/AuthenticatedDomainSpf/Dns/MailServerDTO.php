<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\AuthenticatedDomainSpf\Dns;

/**
 * Designates which mail server is responsible for accepting messages from a domain.
 */
final class MailServerDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'data',
        'host',
        'type',
        'valid',
    ];

    /**
     * The mail server responsible for accepting messages from the sending domain.
     */
    public string $data;
    /**
     * The domain sending the messages.
     */
    public string $host;
    /**
     * They type of DNS record.
     */
    public string $type;
    /**
     * Indicates if this is a valid DNS record.
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
