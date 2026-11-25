<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\AutmoationsLinkStatsResponse;

final class ResultsDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'clicks',
        'step_id',
        'url',
    ];

    protected const array VALIDATION = [
        'clicks' => [
            'minimum' => 1,
        ],
        'url_location' => [
            'minimum' => 0,
        ],
    ];

    /**
     * The number of clicks on this particular link.
     */
    public int $clicks {
        set {
            $this->assigning('clicks', $value);
            $this->clicks = $value;
        }
    }
    /**
     * This is the ID of the step if the stats were requested to be grouped by `step_id`.
     * Format: uuid
     */
    public string $step_id;
    /**
     * This is the URL of the link clicked. If `{{custom_fields}}` are part of the URL, they will be included.
     * Format: uri
     */
    public string $url;
    /**
     * This is the location of the link clicked in each Automation step. Links are located according to their position within the message; the topmost link has index `0`.
     */
    public int $url_location {
        set {
            $this->assigning('url_location', $value);
            $this->url_location = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'clicks' => is_int($value) ? $this->clicks = $value : parent::assignMember($name, $value),
            'step_id' => is_string($value) ? $this->step_id = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            'url_location' => is_int($value) ? $this->url_location = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
