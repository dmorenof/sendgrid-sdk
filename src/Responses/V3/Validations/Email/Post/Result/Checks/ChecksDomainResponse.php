<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Validations\Email\Post\Result\Checks;

/**
 * Checks on the domain portion of the email address.
 */
final class ChecksDomainResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'has_mx_or_a_record',
        'has_valid_address_syntax',
        'is_suspected_disposable_address',
    ];

    /**
     * Whether the email has appropriate DNS records to deliver a message.
     */
    public bool $has_mx_or_a_record;
    /**
     * Whether the email address syntax is valid.
     */
    public bool $has_valid_address_syntax;
    /**
     * Whether the domain appears to be from a disposable email address service.
     */
    public bool $is_suspected_disposable_address;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'has_mx_or_a_record' => is_bool($value) ? $this->has_mx_or_a_record = $value : parent::assignMember($name, $value),
            'has_valid_address_syntax' => is_bool($value) ? $this->has_valid_address_syntax = $value : parent::assignMember($name, $value),
            'is_suspected_disposable_address' => is_bool($value) ? $this->is_suspected_disposable_address = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
