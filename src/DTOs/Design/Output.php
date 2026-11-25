<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Design;

/**
 * Design Output
 */
final class Output extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'html_content',
    ];

    protected const array VALIDATION = [
        'html_content' => [
            'maxLength' => 1048576,
        ],
        'plain_content' => [
            'maxLength' => 1048576,
        ],
    ];

    /**
     * The editor used in the UI.
     */
    public \SendGridSDK\Enums\Editor $editor;
    /**
     * The HTML content of the Design.
     */
    public string $html_content {
        set {
            $this->assigning('html_content', $value);
            $this->html_content = $value;
        }
    }
    /**
     * The name of the new design.
     */
    public string $name;
    /**
     * Plain text content of the Design.
     */
    public string $plain_content {
        set {
            $this->assigning('plain_content', $value);
            $this->plain_content = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'editor' => is_string($value) ? $this->editor = \SendGridSDK\Enums\Editor::from($value) : parent::assignMember($name, $value),
            'html_content' => is_string($value) ? $this->html_content = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'plain_content' => is_string($value) ? $this->plain_content = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
