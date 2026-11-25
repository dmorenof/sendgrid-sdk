<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs;

/**
 * Transactional Templates: Version Output Lean
 */
final class TransactionalTemplatesVersionOutputLean extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'name' => [
            'maxLength' => 100,
        ],
        'subject' => [
            'maxLength' => 255,
        ],
    ];

    /**
     * Set the version as the active version associated with the template. Only one version of a template can be active. The first version created for a template will automatically be set to Active.
     */
    public \SendGridSDK\Enums\Active1 $active;
    /**
     * The editor used in the UI.
     */
    public \SendGridSDK\Enums\Editor1 $editor;
    /**
     * If true, plain_content is always generated from html_content. If false, plain_content is not altered.
     */
    public bool $generate_plain_content;
    /**
     * The HTML content of the Design.
     */
    public string $html_content;
    /**
     * ID of the transactional template version.
     * Format: uuid
     */
    public string $id;
    /**
     * Name of the transactional template version.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * Plain text content of the Design.
     */
    public string $plain_content;
    /**
     * Subject of the new transactional template version.
     */
    public string $subject {
        set {
            $this->assigning('subject', $value);
            $this->subject = $value;
        }
    }
    /**
     * ID of the transactional template.
     */
    public string $template_id;
    /**
     * A Thumbnail preview of the template's html content.
     */
    public string $thumbnail_url;
    /**
     * The date and time that this transactional template version was updated.
     */
    public string $updated_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'active' => is_int($value) ? $this->active = \SendGridSDK\Enums\Active1::from($value) : parent::assignMember($name, $value),
            'editor' => is_string($value) ? $this->editor = \SendGridSDK\Enums\Editor1::from($value) : parent::assignMember($name, $value),
            'generate_plain_content' => is_bool($value) ? $this->generate_plain_content = $value : parent::assignMember($name, $value),
            'html_content' => is_string($value) ? $this->html_content = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'plain_content' => is_string($value) ? $this->plain_content = $value : parent::assignMember($name, $value),
            'subject' => is_string($value) ? $this->subject = $value : parent::assignMember($name, $value),
            'template_id' => is_string($value) ? $this->template_id = $value : parent::assignMember($name, $value),
            'thumbnail_url' => is_string($value) ? $this->thumbnail_url = $value : parent::assignMember($name, $value),
            'updated_at' => is_string($value) ? $this->updated_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
