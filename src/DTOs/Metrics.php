<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs;

/**
 * metrics
 */
final class Metrics extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'bounce_drops',
        'bounces',
        'clicks',
        'delivered',
        'invalid_emails',
        'opens',
        'requests',
        'spam_report_drops',
        'spam_reports',
        'unique_clicks',
        'unique_opens',
        'unsubscribes',
    ];

    public int $bounce_drops;
    public int $bounces;
    public int $clicks;
    public int $delivered;
    public int $invalid_emails;
    public int $opens;
    public int $requests;
    public int $spam_report_drops;
    public int $spam_reports;
    public int $unique_clicks;
    public int $unique_opens;
    public int $unsubscribes;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bounce_drops' => is_int($value) ? $this->bounce_drops = $value : parent::assignMember($name, $value),
            'bounces' => is_int($value) ? $this->bounces = $value : parent::assignMember($name, $value),
            'clicks' => is_int($value) ? $this->clicks = $value : parent::assignMember($name, $value),
            'delivered' => is_int($value) ? $this->delivered = $value : parent::assignMember($name, $value),
            'invalid_emails' => is_int($value) ? $this->invalid_emails = $value : parent::assignMember($name, $value),
            'opens' => is_int($value) ? $this->opens = $value : parent::assignMember($name, $value),
            'requests' => is_int($value) ? $this->requests = $value : parent::assignMember($name, $value),
            'spam_report_drops' => is_int($value) ? $this->spam_report_drops = $value : parent::assignMember($name, $value),
            'spam_reports' => is_int($value) ? $this->spam_reports = $value : parent::assignMember($name, $value),
            'unique_clicks' => is_int($value) ? $this->unique_clicks = $value : parent::assignMember($name, $value),
            'unique_opens' => is_int($value) ? $this->unique_opens = $value : parent::assignMember($name, $value),
            'unsubscribes' => is_int($value) ? $this->unsubscribes = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
