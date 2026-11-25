<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Integration;

final class Patch extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The third-party application you would like to forward your email events to.
     */
    public \SendGridSDK\Enums\Destination1 $destination;
    /**
     * The configurable filters for SendGrid to destination email event forwarding.
     */
    public \SendGridSDK\DTOs\Integration\Patch\FiltersDTO $filters;
    /**
     * The nickname for the Integration.
     * Example: "My New Segment Integration!"
     */
    public string $label;
    /**
     * The properties of an Integration required to send events to a specific third-party application.
     */
    public \SendGridSDK\DTOs\Integration\Patch\PropertiesDTO $properties;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'destination' => is_string($value) ? $this->destination = \SendGridSDK\Enums\Destination1::from($value) : parent::assignMember($name, $value),
            'label' => is_string($value) ? $this->label = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
