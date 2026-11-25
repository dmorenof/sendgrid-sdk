<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\AdvancedStats;

/**
 * Stats: Advanced Stats with Clicks
 *
 * The individual events and their stats.
 */
final class Clicks extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The number of links that were clicked in your emails.
     */
    public int $clicks;
    /**
     * The number of unique recipients who clicked links in your emails.
     */
    public int $unique_clicks;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'clicks' => is_int($value) ? $this->clicks = $value : parent::assignMember($name, $value),
            'unique_clicks' => is_int($value) ? $this->unique_clicks = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
