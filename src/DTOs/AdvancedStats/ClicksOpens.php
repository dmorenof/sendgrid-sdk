<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\AdvancedStats;

/**
 * Stats: Advanced Stats with Clicks and Opens
 *
 * The individual events and their stats.
 */
final class ClicksOpens extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The number of links that were clicked in your emails.
     */
    public int $clicks;
    /**
     * The total number of times your emails were opened by recipients.
     */
    public int $opens;
    /**
     * The number of unique recipients who clicked links in your emails.
     */
    public int $unique_clicks;
    /**
     * The number of unique recipients who opened your emails.
     */
    public int $unique_opens;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'clicks' => is_int($value) ? $this->clicks = $value : parent::assignMember($name, $value),
            'opens' => is_int($value) ? $this->opens = $value : parent::assignMember($name, $value),
            'unique_clicks' => is_int($value) ? $this->unique_clicks = $value : parent::assignMember($name, $value),
            'unique_opens' => is_int($value) ? $this->unique_opens = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
