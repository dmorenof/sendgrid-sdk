<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Integration\Input;

/**
 * The properties of an Integration required to send events to a specific third-party application.
 */
final class PropertiesDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'destination_region',
        'write_key',
    ];

    /**
     * The workspace region where the Segment Source write key lives.
     */
    public \SendGridSDK\Enums\Destination\Region1 $destination_region;
    /**
     * The write key provided by the Segment Source you'd like to have events forwarded to. Must be between 6 and 51 characters.
     * Example: "1234-abc"
     */
    public string $write_key;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'destination_region' => is_string($value) ? $this->destination_region = \SendGridSDK\Enums\Destination\Region1::from($value) : parent::assignMember($name, $value),
            'write_key' => is_string($value) ? $this->write_key = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
