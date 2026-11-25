<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Whitelabel\Links\ById\Validate\Post\ValidationResults;

/**
 * The DNS record created to verify the branded link.
 */
final class OwnerCnameResponse extends \Dmorenof\SdkRuntime\DTO
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
     * Null if valid. If the DNS record is invalid, this will explain why.
     */
    public ?string $reason;
    /**
     * Indicates if the DNS record is valid.
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
