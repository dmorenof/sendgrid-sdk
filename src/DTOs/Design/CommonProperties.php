<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Design;

/**
 * Design Common Fields
 */
final class CommonProperties extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'categories' => [
            'maxItems' => 10,
            'uniqueItems' => true,
        ],
        'subject' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The list of categories applied to the design
     */
    public \SendGridSDK\Collections\Design\CommonProperties\CategoriesCollection $categories {
        set {
            $this->assigning('categories', $value);
            $this->categories = $value;
        }
    }
    /**
     * The editor used in the UI.
     */
    public \SendGridSDK\Enums\Editor $editor;
    /**
     * If true, plain_content is always generated from html_content. If false, plain_content is not altered.
     */
    public bool $generate_plain_content;
    /**
     * The name of the new design.
     */
    public string $name;
    /**
     * Subject of the Design.
     */
    public string $subject {
        set {
            $this->assigning('subject', $value);
            $this->subject = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'categories' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->categories = new \SendGridSDK\Collections\Design\CommonProperties\CategoriesCollection($value) : parent::assignMember($name, $value),
            'editor' => is_string($value) ? $this->editor = \SendGridSDK\Enums\Editor::from($value) : parent::assignMember($name, $value),
            'generate_plain_content' => is_bool($value) ? $this->generate_plain_content = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'subject' => is_string($value) ? $this->subject = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
