<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs;

/**
 * AutomationsResponse
 */
final class AutomationsResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'results',
    ];

    public \SendGridSDK\DTOs\Mc\StatsMetadata $_metadata;
    public \SendGridSDK\Collections\AutomationsResponse\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            '_metadata' => $value instanceof \stdClass ? $this->_metadata = new \SendGridSDK\DTOs\Mc\StatsMetadata($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
