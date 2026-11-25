<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Validations\Email\Post;

final class EmailResultResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'checks',
        'email',
        'host',
        'ip_address',
        'local',
        'score',
        'verdict',
    ];

    /**
     * Granular checks for email address validity.
     */
    public \SendGridSDK\Responses\V3\Validations\Email\Post\Result\ResultChecksResponse $checks;
    /**
     * The email being validated
     * Format: email
     */
    public string $email;
    /**
     * The domain of the email address.
     * Format: hostname
     */
    public string $host;
    /**
     * The IP address associated with this email.
     */
    public string $ip_address;
    /**
     * The local part of the email address.
     */
    public string $local;
    /**
     * A numeric representation of the email validity.
     */
    public float $score;
    /**
     * The source of the validation, as per the API request.
     */
    public string $source;
    /**
     * A suggested correction in the event of domain name typos (e.g., gmial.com)
     */
    public string $suggestion;
    /**
     * A generic classification of whether or not the email address is valid.
     */
    public \SendGridSDK\Enums\Verdict $verdict;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'host' => is_string($value) ? $this->host = $value : parent::assignMember($name, $value),
            'ip_address' => is_string($value) ? $this->ip_address = $value : parent::assignMember($name, $value),
            'local' => is_string($value) ? $this->local = $value : parent::assignMember($name, $value),
            'score' => is_float($value) ? $this->score = $value : parent::assignMember($name, $value),
            'source' => is_string($value) ? $this->source = $value : parent::assignMember($name, $value),
            'suggestion' => is_string($value) ? $this->suggestion = $value : parent::assignMember($name, $value),
            'verdict' => is_string($value) ? $this->verdict = \SendGridSDK\Enums\Verdict::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
