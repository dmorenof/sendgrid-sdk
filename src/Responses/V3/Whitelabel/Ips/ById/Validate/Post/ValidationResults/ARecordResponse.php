<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Whitelabel\Ips\ById\Validate\Post\ValidationResults;

final class ARecordResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'reason',
        'valid',
    ];

    protected const array VALIDATION = [
        'valid' => [
            'jsonSchema' => '{"enum":[false,true]}',
        ],
    ];

    /**
     * The reason the reverse DNS record could not be validated. Is `null` if the reverse DNS record was validated.
     */
    public ?string $reason;
    /**
     * Indicates if the reverse DNS record could be validated.
     */
    public bool $valid {
        set {
            $this->assigning('valid', $value);
            $this->valid = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'reason' => $value === null || is_string($value) ? $this->reason = $value : parent::assignMember($name, $value),
            'valid' => is_bool($value) ? $this->valid = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
