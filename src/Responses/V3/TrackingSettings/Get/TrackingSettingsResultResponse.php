<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\TrackingSettings\Get;

final class TrackingSettingsResultResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * A description about the event that is being tracked.
     */
    public string $description;
    /**
     * Indicates if this tracking setting is currently enabled.
     */
    public bool $enabled;
    /**
     * The name of the event being tracked.
     */
    public string $name;
    /**
     * The title of the tracking setting.
     */
    public string $title;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
