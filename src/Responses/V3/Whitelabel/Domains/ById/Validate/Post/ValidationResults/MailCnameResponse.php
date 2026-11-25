<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Whitelabel\Domains\ById\Validate\Post\ValidationResults;

/**
 * The CNAME record for the authenticated domain.
 */
final class MailCnameResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The reason this record is invalid.
     */
    public ?string $reason;
    /**
     * Indicates if this DNS record is valid.
     */
    public bool $valid;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'reason' => $value === null || is_string($value) ? $this->reason = $value : parent::assignMember($name, $value),
            'valid' => is_bool($value) ? $this->valid = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
