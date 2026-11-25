<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\AuthenticatedDomainSpf\Dns;

/**
 * The DKIM record for messages sent using this authenticated domain.
 */
final class DkimDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'data',
        'host',
        'type',
        'valid',
    ];

    /**
     * The DKIM record.
     */
    public string $data;
    /**
     * The DNS labels for the DKIM signature.
     */
    public string $host;
    /**
     * The type of data in the DKIM record.
     */
    public string $type;
    /**
     * Indicates if the DKIM record is valid.
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
