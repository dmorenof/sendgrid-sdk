<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs;

/**
 * Stats: Category Stats
 * Example: {"date":"2015-01-01","stats":[{"metrics":{"blocks":0,"bounce_drops":0,"bounces":0,"clicks":0,"deferred":0,"delivered":0,"invalid_emails":0,"opens":0,"processed":0,"requests":0,"spam_report_drops":0,"spam_reports":0,"unique_clicks":0,"unique_opens":0,"unsubscribe_drops":0,"unsubscribes":0},"name":"cat1","type":"category"},{"metrics":{"blocks":0,"bounce_drops":0,"bounces":0,"clicks":0,"deferred":0,"delivered":0,"invalid_emails":0,"opens":0,"processed":0,"requests":0,"spam_report_drops":0,"spam_reports":0,"unique_clicks":0,"unique_opens":0,"unsubscribe_drops":0,"unsubscribes":0},"name":"cat2","type":"category"}]}
 */
final class CategoryStats extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'date',
    ];

    /**
     * The date the statistics were gathered.
     */
    public string $date;
    public \SendGridSDK\Collections\CategoryStats\StatsCollection $stats;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'date' => is_string($value) ? $this->date = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
