<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Subuser;

/**
 * subuser_stats
 * Example: {"date":"2016-02-01","stats":[{"first_name":"John","last_name":"Doe","metrics":{"blocks":0,"bounce_drops":0,"bounces":0,"clicks":5,"deferred":0,"delivered":0,"invalid_emails":0,"opens":10,"processed":10,"requests":10,"spam_report_drops":0,"spam_reports":0,"unique_clicks":0,"unique_opens":0,"unsubscribe_drops":0,"unsubscribes":0},"name":"user1","type":"subuser"}]}
 */
final class Stats extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The date the statistics were gathered.
     */
    public string $date;
    /**
     * The list of statistics.
     */
    public \SendGridSDK\Collections\Subuser\Stats\StatsCollection $stats;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'date' => is_string($value) ? $this->date = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
