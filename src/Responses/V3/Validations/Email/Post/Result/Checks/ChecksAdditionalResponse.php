<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Validations\Email\Post\Result\Checks;

/**
 * Additional checks on the email address.
 */
final class ChecksAdditionalResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'has_known_bounces',
        'has_suspected_bounces',
    ];

    /**
     * Whether email sent to this address from your account has bounced.
     */
    public bool $has_known_bounces;
    /**
     * Whether our model predicts that the email address might bounce.
     */
    public bool $has_suspected_bounces;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'has_known_bounces' => is_bool($value) ? $this->has_known_bounces = $value : parent::assignMember($name, $value),
            'has_suspected_bounces' => is_bool($value) ? $this->has_suspected_bounces = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
