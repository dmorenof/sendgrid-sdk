<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\TrackingSettings\Click;

/**
 * Example: {"enabled":true}
 */
final class Patch extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The setting you want to use for click tracking.
     */
    public bool $enabled;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
