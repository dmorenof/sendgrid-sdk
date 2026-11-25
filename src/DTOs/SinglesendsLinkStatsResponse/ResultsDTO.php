<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\SinglesendsLinkStatsResponse;

final class ResultsDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'ab_phase',
        'ab_variation',
        'clicks',
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
     * This is the A/B phase of the Single Send stat returned. If the `ab_phase` query parameter was not provided, it will return `"all"`.
     */
    public \SendGridSDK\Enums\Ab\Phase1 $ab_phase;
    /**
     * This is the A/B variation of the Single Send stat returned. It is set to `"all"` if the `ab_variation` query parameter was not set in the request and `group_by` doesn't contain `ab_variation`.
     * Format: uuid
     */
    public string $ab_variation;
    /**
     * the number of clicks on this particular link
     */
    public int $clicks {
        set {
            $this->assigning('clicks', $value);
            $this->clicks = $value;
        }
    }
    /**
     * This is the URL of the link clicked. If `{{custom_fields}}` are part of the URL, they will be included.
     * Format: uri
     */
    public string $url;
    /**
     * This is the location of the link clicked in each Single Send A/B variation, or in the Single Send itself if there are no variations. Links are numbered from the top down; the topmost link is index `0`.
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
            'ab_phase' => is_string($value) ? $this->ab_phase = \SendGridSDK\Enums\Ab\Phase1::from($value) : parent::assignMember($name, $value),
            'ab_variation' => is_string($value) ? $this->ab_variation = $value : parent::assignMember($name, $value),
            'clicks' => is_int($value) ? $this->clicks = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            'url_location' => is_int($value) ? $this->url_location = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
