<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Whitelabel\Domains\ById\Validate\Post\ValidationResults;

/**
 * A DNS record for this authenticated domain.
 */
final class ResultsDkim1Response extends \Dmorenof\SdkRuntime\DTO
{
    public ?string $reason;
    /**
     * Indicates if the DNS record is valid.
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
