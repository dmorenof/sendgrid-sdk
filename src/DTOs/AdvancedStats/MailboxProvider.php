<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\AdvancedStats;

/**
 * Stats: Advanced Stats for Mailbox Provider
 *
 * The individual events and their stats.
 */
final class MailboxProvider extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The number of emails that were not allowed to be delivered by ISPs.
     */
    public int $blocks;
    /**
     * The number of emails that bounced instead of being delivered.
     */
    public int $bounces;
    /**
     * The number of emails that temporarily could not be delivered.
     */
    public int $deferred;
    /**
     * The number of emails SendGrid was able to confirm were actually delivered to a recipient.
     */
    public int $delivered;
    /**
     * The number of emails that were not delivered due to the recipient email address being on a suppression list.
     */
    public int $drops;
    /**
     * Requests from your website, application, or mail client via SMTP Relay or the Web API that SendGrid processed.
     */
    public int $processed;
    /**
     * The number of emails that were requested to be delivered.
     */
    public int $requests;
    /**
     * The number of recipients who marked your email as spam.
     */
    public int $spam_reports;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'blocks' => is_int($value) ? $this->blocks = $value : parent::assignMember($name, $value),
            'bounces' => is_int($value) ? $this->bounces = $value : parent::assignMember($name, $value),
            'deferred' => is_int($value) ? $this->deferred = $value : parent::assignMember($name, $value),
            'delivered' => is_int($value) ? $this->delivered = $value : parent::assignMember($name, $value),
            'drops' => is_int($value) ? $this->drops = $value : parent::assignMember($name, $value),
            'processed' => is_int($value) ? $this->processed = $value : parent::assignMember($name, $value),
            'requests' => is_int($value) ? $this->requests = $value : parent::assignMember($name, $value),
            'spam_reports' => is_int($value) ? $this->spam_reports = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
