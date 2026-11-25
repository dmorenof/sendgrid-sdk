<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Seq;

/**
 * Score
 *
 * A user's SendGrid Engagement Quality (SEQ) score for a specified date. Your SEQ score is determined by measuring several key metrics including your open rate, spam rate, and engagement recency. Your overall score allows you to quickly assess how your email program is performing at a high level. You will receive a score from `1` to `5` with a higher number representing better engagement quality. See the `metrics` property to understand how your program is performing across the input categories that determine your overall score.
 */
final class Score extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'user_id',
    ];

    protected const array VALIDATION = [
        'score' => [
            'minimum' => 1,
            'maximum' => 5,
        ],
    ];

    /**
     * The date (UTC) for which this score was calculated.
     * Format: date
     */
    public string $date;
    public \SendGridSDK\DTOs\Seq\Metrics $metrics;
    /**
     * Your SendGrid Engagement Quality Score. The `score` property will be omitted when a score is unknown. A score may be unknown if you have not turned on [open tracking](https://docs.sendgrid.com/ui/account-and-settings/tracking) and/or your account or Subuser has not sent at least 1,000 messages during the previous 30 days.
     */
    public float $score {
        set {
            $this->assigning('score', $value);
            $this->score = $value;
        }
    }
    /**
     * The user identifier associated with this score.
     */
    public string $user_id;
    /**
     * The username associated with this score.
     */
    public string $username;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'date' => is_string($value) ? $this->date = $value : parent::assignMember($name, $value),
            'metrics' => $value instanceof \stdClass ? $this->metrics = new \SendGridSDK\DTOs\Seq\Metrics($value) : parent::assignMember($name, $value),
            'score' => is_float($value) ? $this->score = $value : parent::assignMember($name, $value),
            'user_id' => is_string($value) ? $this->user_id = $value : parent::assignMember($name, $value),
            'username' => is_string($value) ? $this->username = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
