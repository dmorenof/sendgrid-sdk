<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs;

/**
 * Parse Setting
 * Example: {"url":"http://email.myhostname.com","hostname":"myhostname.com","spam_check":false,"send_raw":true}
 */
final class ParseSetting extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * A specific and unique domain or subdomain that you have created to use exclusively to parse your incoming email. For example, `parse.yourdomain.com`.
     */
    public string $hostname;
    /**
     * Indicates if you would like SendGrid to post the original MIME-type content of your parsed email. When this parameter is set to `true`, SendGrid will send a JSON payload of the content of your email.
     */
    public bool $send_raw;
    /**
     * Indicates if you would like SendGrid to check the content parsed from your emails for spam before POSTing them to your domain.
     */
    public bool $spam_check;
    /**
     * The public URL where you would like SendGrid to POST the data parsed from your email. Any emails sent with the given hostname provided (whose MX records have been updated to point to SendGrid) will be parsed and POSTed to this URL.
     */
    public string $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'hostname' => is_string($value) ? $this->hostname = $value : parent::assignMember($name, $value),
            'send_raw' => is_bool($value) ? $this->send_raw = $value : parent::assignMember($name, $value),
            'spam_check' => is_bool($value) ? $this->spam_check = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
