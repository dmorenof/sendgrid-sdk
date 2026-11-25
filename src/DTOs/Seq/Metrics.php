<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Seq;

/**
 * A collection of metrics representing your engagement score across multiple indicators such as your open rate, spam rate, and bounce rate. Each metric is assigned a score from `1` to `5` with a higher score representing better engagement quality for that particular metric. The `metrics` property will be omitted when a score is unknown. A score may be unknown if you have not turned on [open tracking](https://docs.sendgrid.com/ui/account-and-settings/tracking) and/or your account or Subuser has not sent at least 1,000 messages during the previous 30 days.
 */
final class Metrics extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'bounce_classification',
        'bounce_rate',
        'engagement_recency',
        'open_rate',
        'spam_rate',
    ];

    protected const array VALIDATION = [
        'bounce_classification' => [
            'minimum' => 1,
            'maximum' => 5,
        ],
        'bounce_rate' => [
            'minimum' => 1,
            'maximum' => 5,
        ],
        'engagement_recency' => [
            'minimum' => 1,
            'maximum' => 5,
        ],
        'open_rate' => [
            'minimum' => 1,
            'maximum' => 5,
        ],
        'spam_rate' => [
            'minimum' => 1,
            'maximum' => 5,
        ],
    ];

    /**
     * Indicates the degree to which mailbox providers are rejecting your mail due to reputation issues or content that looks like spam. Your score is calculated based on a ratio of these specific types of bounces to your total processed email. Your score will range from `1` to `5` with a higher score representing a lower percentage of bounces and better engagement quality.
     */
    public float $bounce_classification {
        set {
            $this->assigning('bounce_classification', $value);
            $this->bounce_classification = $value;
        }
    }
    /**
     * Indicates if you are attempting to send too many messages to addresses that don't exist. This score is determined by calculating your permanent bounces (bounces to invalid mailboxes). Your score will range from `1` to `5` with a higher score representing fewer bounces and better engagement quality.
     */
    public float $bounce_rate {
        set {
            $this->assigning('bounce_rate', $value);
            $this->bounce_rate = $value;
        }
    }
    /**
     * Indicates whether or not you are sending to an engaged audience. Engagement recency is determined by factors such as how regularly your messages are being opened and clicked. Your score will range from `1` to `5` with a higher score representing better engagement quality.
     */
    public float $engagement_recency {
        set {
            $this->assigning('engagement_recency', $value);
            $this->engagement_recency = $value;
        }
    }
    /**
     * Indicates the degree to which your audience is opening your messages. Your score will range from `1` to `5` with a higher score representing a better open rate and better engagement quality.
     */
    public float $open_rate {
        set {
            $this->assigning('open_rate', $value);
            $this->open_rate = $value;
        }
    }
    /**
     * Indicates if your messages are generating excessive spam complaints from recipients. This score is determined by calculating the number of recipients who open your mail and then mark it as spam. Your score will range from `1` to `5` with a higher score representing fewer spam reports and better engagement quality.
     */
    public float $spam_rate {
        set {
            $this->assigning('spam_rate', $value);
            $this->spam_rate = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bounce_classification' => is_float($value) ? $this->bounce_classification = $value : parent::assignMember($name, $value),
            'bounce_rate' => is_float($value) ? $this->bounce_rate = $value : parent::assignMember($name, $value),
            'engagement_recency' => is_float($value) ? $this->engagement_recency = $value : parent::assignMember($name, $value),
            'open_rate' => is_float($value) ? $this->open_rate = $value : parent::assignMember($name, $value),
            'spam_rate' => is_float($value) ? $this->spam_rate = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
