<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\CategoryStats\StatsItem;

final class MetricsDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'blocks',
        'bounce_drops',
        'bounces',
        'clicks',
        'deferred',
        'delivered',
        'invalid_emails',
        'opens',
        'processed',
        'requests',
        'spam_report_drops',
        'spam_reports',
        'unique_clicks',
        'unique_opens',
        'unsubscribe_drops',
        'unsubscribes',
    ];

    /**
     * The number of emails that were not allowed to be delivered by ISPs.
     */
    public int $blocks;
    /**
     * The number of emails that were dropped because of a bounce.
     */
    public int $bounce_drops;
    /**
     * The number of emails that bounced instead of being delivered.
     */
    public int $bounces;
    /**
     * The number of links that were clicked.
     */
    public int $clicks;
    /**
     * The number of emails that temporarily could not be delivered.
     */
    public int $deferred;
    /**
     * The number of emails SendGrid was able to confirm were actually delivered to a recipient.
     */
    public int $delivered;
    /**
     * The number of recipients who had malformed email addresses or whose mail provider reported the address as invalid.
     */
    public int $invalid_emails;
    /**
     * The total number of times your emails were opened by recipients.
     */
    public int $opens;
    /**
     * Requests from your website, application, or mail client via SMTP Relay or the API that SendGrid processed.
     */
    public int $processed;
    /**
     * The number of emails that were requested to be delivered.
     */
    public int $requests;
    /**
     * The number of emails that were dropped due to a recipient previously marking your emails as spam.
     */
    public int $spam_report_drops;
    /**
     * The number of recipients who marked your email as spam.
     */
    public int $spam_reports;
    /**
     * The number of unique recipients who clicked links in your emails.
     */
    public int $unique_clicks;
    /**
     * The number of unique recipients who opened your emails.
     */
    public int $unique_opens;
    /**
     * The number of emails dropped due to a recipient unsubscribing from your emails.
     */
    public int $unsubscribe_drops;
    /**
     * The number of recipients who unsubscribed from your emails.
     */
    public int $unsubscribes;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'blocks' => is_int($value) ? $this->blocks = $value : parent::assignMember($name, $value),
            'bounce_drops' => is_int($value) ? $this->bounce_drops = $value : parent::assignMember($name, $value),
            'bounces' => is_int($value) ? $this->bounces = $value : parent::assignMember($name, $value),
            'clicks' => is_int($value) ? $this->clicks = $value : parent::assignMember($name, $value),
            'deferred' => is_int($value) ? $this->deferred = $value : parent::assignMember($name, $value),
            'delivered' => is_int($value) ? $this->delivered = $value : parent::assignMember($name, $value),
            'invalid_emails' => is_int($value) ? $this->invalid_emails = $value : parent::assignMember($name, $value),
            'opens' => is_int($value) ? $this->opens = $value : parent::assignMember($name, $value),
            'processed' => is_int($value) ? $this->processed = $value : parent::assignMember($name, $value),
            'requests' => is_int($value) ? $this->requests = $value : parent::assignMember($name, $value),
            'spam_report_drops' => is_int($value) ? $this->spam_report_drops = $value : parent::assignMember($name, $value),
            'spam_reports' => is_int($value) ? $this->spam_reports = $value : parent::assignMember($name, $value),
            'unique_clicks' => is_int($value) ? $this->unique_clicks = $value : parent::assignMember($name, $value),
            'unique_opens' => is_int($value) ? $this->unique_opens = $value : parent::assignMember($name, $value),
            'unsubscribe_drops' => is_int($value) ? $this->unsubscribe_drops = $value : parent::assignMember($name, $value),
            'unsubscribes' => is_int($value) ? $this->unsubscribes = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
