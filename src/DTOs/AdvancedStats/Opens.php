<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\AdvancedStats;

/**
 * Stats: Advanced Stats with Opens
 *
 * The individual events and their stats.
 */
final class Opens extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The total number of times your emails were opened by recipients.
     */
    public int $opens;
    /**
     * The number of unique recipients who opened your emails.
     */
    public int $unique_opens;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'opens' => is_int($value) ? $this->opens = $value : parent::assignMember($name, $value),
            'unique_opens' => is_int($value) ? $this->unique_opens = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
