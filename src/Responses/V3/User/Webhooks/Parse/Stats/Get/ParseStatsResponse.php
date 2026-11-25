<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\User\Webhooks\Parse\Stats\Get;

final class ParseStatsResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'date',
        'stats',
    ];

    /**
     * The date that the stats were collected.
     */
    public string $date;
    /**
     * The Parse Webhook usage statistics.
     */
    public \SendGridSDK\Collections\V3\User\Webhooks\Parse\Stats\Get\ResponseItem\ResponseItemStatsCollection $stats;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'date' => is_string($value) ? $this->date = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
