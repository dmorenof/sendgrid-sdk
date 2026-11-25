<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Ab;

/**
 * abTest_summary
 */
final class TestSummary extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'duration',
        'expiration_date',
        'test_percentage',
        'type',
        'winner_criteria',
        'winner_selected_at',
        'winning_template_id',
    ];

    /**
     * How long the A/B Testing will last
     */
    public string $duration;
    /**
     * Last day to select an A/B Test Winner
     */
    public ?string $expiration_date;
    /**
     * What percentage of your recipient will be included in your A/B testing
     */
    public int $test_percentage;
    /**
     * What differs between the A/B tests
     */
    public \SendGridSDK\Enums\Mc\SinglesendsType $type;
    /**
     * How the winner will be decided
     */
    public \SendGridSDK\Enums\WinnerCriteria $winner_criteria;
    /**
     * When the winner was selected
     */
    public ?string $winner_selected_at;
    /**
     * Winner of the A/B Test
     */
    public string $winning_template_id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'duration' => is_string($value) ? $this->duration = $value : parent::assignMember($name, $value),
            'expiration_date' => $value === null || is_string($value) ? $this->expiration_date = $value : parent::assignMember($name, $value),
            'test_percentage' => is_int($value) ? $this->test_percentage = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \SendGridSDK\Enums\Mc\SinglesendsType::from($value) : parent::assignMember($name, $value),
            'winner_criteria' => is_string($value) ? $this->winner_criteria = \SendGridSDK\Enums\WinnerCriteria::from($value) : parent::assignMember($name, $value),
            'winner_selected_at' => $value === null || is_string($value) ? $this->winner_selected_at = $value : parent::assignMember($name, $value),
            'winning_template_id' => is_string($value) ? $this->winning_template_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
