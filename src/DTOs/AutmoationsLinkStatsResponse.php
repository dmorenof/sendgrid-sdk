<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs;

/**
 * AutmoationsLinkStatsResponse
 */
final class AutmoationsLinkStatsResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        '_metadata',
        'results',
        'total_clicks',
    ];

    public \SendGridSDK\DTOs\Link\TrackingMetadata $_metadata;
    public \SendGridSDK\Collections\AutmoationsLinkStatsResponse\ResultsCollection $results;
    public int $total_clicks;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            '_metadata' => $value instanceof \stdClass ? $this->_metadata = new \SendGridSDK\DTOs\Link\TrackingMetadata($value) : parent::assignMember($name, $value),
            'total_clicks' => is_int($value) ? $this->total_clicks = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
