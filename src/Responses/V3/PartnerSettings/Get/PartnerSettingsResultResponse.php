<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\PartnerSettings\Get;

final class PartnerSettingsResultResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'description',
        'enabled',
        'name',
        'title',
    ];

    /**
     * A description of this partner setting.
     */
    public string $description;
    /**
     * Indicates if this partner setting has been enabled.
     */
    public bool $enabled;
    /**
     * The name of the partner setting.
     */
    public string $name;
    /**
     * The title of the partner.
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
