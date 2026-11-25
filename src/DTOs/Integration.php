<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs;

final class Integration extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The third-party application you would like to forward your events to.
     */
    public \SendGridSDK\Enums\Destination3 $destination;
    /**
     * The configurable filters for SendGrid to destination email event forwarding.
     */
    public \SendGridSDK\DTOs\Integration\FiltersDTO $filters;
    /**
     * The unique ID of an Integration.
     * Example: "12345"
     */
    public string $integration_id;
    /**
     * The nickname for the Integration.
     * Example: "My New Segment Integration!"
     */
    public string $label;
    /**
     * The properties of an Integration required to send events to a specific third-party application.
     */
    public \SendGridSDK\DTOs\Integration\PropertiesDTO $properties;
    /**
     * Your Twilio SendGrid account ID.
     * Example: "123456"
     */
    public string $user_id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'destination' => is_string($value) ? $this->destination = \SendGridSDK\Enums\Destination3::from($value) : parent::assignMember($name, $value),
            'integration_id' => is_string($value) ? $this->integration_id = $value : parent::assignMember($name, $value),
            'label' => is_string($value) ? $this->label = $value : parent::assignMember($name, $value),
            'user_id' => is_string($value) ? $this->user_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
