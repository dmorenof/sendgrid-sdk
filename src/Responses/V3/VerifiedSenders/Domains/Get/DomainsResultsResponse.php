<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\VerifiedSenders\Domains\Get;

final class DomainsResultsResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'hard_failures',
        'soft_failures',
    ];

    public \SendGridSDK\Collections\StringCollection $hard_failures;
    public \SendGridSDK\Collections\StringCollection $soft_failures;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'hard_failures' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->hard_failures = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'soft_failures' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->soft_failures = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
