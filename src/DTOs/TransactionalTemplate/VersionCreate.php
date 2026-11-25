<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\TransactionalTemplate;

/**
 * Transactional Templates: Version Create
 * Example: {"template_id":"Excepteur Ut qui","active":1,"name":"pariatur non incididunt commodo","html_content":"dolor","generate_plain_content":false,"subject":"aliquip nulla Ut","editor":"design","plain_content":"labore dolore"}
 */
final class VersionCreate extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'name',
        'subject',
    ];

    protected const array VALIDATION = [
        'html_content' => [
            'maxLength' => 1048576,
        ],
        'name' => [
            'maxLength' => 100,
        ],
        'plain_content' => [
            'maxLength' => 1048576,
        ],
        'subject' => [
            'maxLength' => 255,
        ],
    ];

    /**
     * Set the version as the active version associated with the template (0 is inactive, 1 is active). Only one version of a template can be active. The first version created for a template will automatically be set to Active.
     */
    public \SendGridSDK\Enums\Active $active;
    /**
     * The editor used in the UI.
     */
    public \SendGridSDK\Enums\Editor $editor;
    /**
     * If true, plain_content is always generated from html_content. If false, plain_content is not altered.
     */
    public bool $generate_plain_content;
    /**
     * The HTML content of the version. Maximum of 1048576 bytes allowed.
     */
    public string $html_content {
        set {
            $this->assigning('html_content', $value);
            $this->html_content = $value;
        }
    }
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
     * Text/plain content of the transactional template version. Maximum of 1048576 bytes allowed.
     */
    public string $plain_content {
        set {
            $this->assigning('plain_content', $value);
            $this->plain_content = $value;
        }
    }
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
     * For dynamic templates only, the mock json data that will be used for template preview and test sends.
     */
    public string $test_data;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'active' => is_int($value) ? $this->active = \SendGridSDK\Enums\Active::from($value) : parent::assignMember($name, $value),
            'editor' => is_string($value) ? $this->editor = \SendGridSDK\Enums\Editor::from($value) : parent::assignMember($name, $value),
            'generate_plain_content' => is_bool($value) ? $this->generate_plain_content = $value : parent::assignMember($name, $value),
            'html_content' => is_string($value) ? $this->html_content = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'plain_content' => is_string($value) ? $this->plain_content = $value : parent::assignMember($name, $value),
            'subject' => is_string($value) ? $this->subject = $value : parent::assignMember($name, $value),
            'test_data' => is_string($value) ? $this->test_data = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
