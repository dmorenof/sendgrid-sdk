<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Design;

/**
 * Design Duplicate Design Input
 * Example: {"name":"Ahoy, Cake or Pie Cafe!","editor":"design"}
 */
final class DuplicateInput extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The editor used in the UI.
     */
    public \SendGridSDK\Enums\Editor $editor;
    /**
     * The name of the new design.
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'editor' => is_string($value) ? $this->editor = \SendGridSDK\Enums\Editor::from($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
