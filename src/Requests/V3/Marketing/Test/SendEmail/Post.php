<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Marketing\Test\SendEmail;

/**
 * Example: {"template_id":"f8f77db8-b9fa-4b3c-9ee8-de3d582016b8","version_id_override":"7734f757-8eb8-4d22-b7f0-779a72f32986","sender_id":6060664,"custom_unsubscribe_url":"https://example.com/unsubscribe","suppression_group_id":21865513,"emails":["janedoe&#64;example.com","tiramisu&#64;example.com","bundt&#64;example.com"]}
 */
final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'emails',
        'template_id',
    ];

    protected const array VALIDATION = [
        'emails' => [
            'minItems' => 1,
            'maxItems' => 10,
            'uniqueItems' => true,
        ],
    ];

    /**
     * A custom unsubscribe URL.
     */
    public string $custom_unsubscribe_url;
    /**
     * An array of email addresses you want to send the test message to.
     */
    public \SendGridSDK\Collections\AllSegments200\ListIdsCollection $emails {
        set {
            $this->assigning('emails', $value);
            $this->emails = $value;
        }
    }
    /**
     * You can either specify this address or specify a verified sender ID.
     * Format: email
     */
    public string $from_address;
    /**
     * This ID must belong to a verified sender. Alternatively, you may supply a `from_address` email.
     */
    public int $sender_id;
    public int $suppression_group_id;
    /**
     * The ID of the template that you would like to use. If you use a template that contains a subject and content (either text or HTML), then those values specified at the personalizations or message level will not be used.
     * Format: uuid
     */
    public string $template_id;
    /**
     *  You can override the active template with an alternative template version by passing the version ID in this field. If this field is blank, the active template version will be used.
     * Format: uuid
     */
    public string $version_id_override;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'custom_unsubscribe_url' => is_string($value) ? $this->custom_unsubscribe_url = $value : parent::assignMember($name, $value),
            'emails' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->emails = new \SendGridSDK\Collections\AllSegments200\ListIdsCollection($value) : parent::assignMember($name, $value),
            'from_address' => is_string($value) ? $this->from_address = $value : parent::assignMember($name, $value),
            'sender_id' => is_int($value) ? $this->sender_id = $value : parent::assignMember($name, $value),
            'suppression_group_id' => is_int($value) ? $this->suppression_group_id = $value : parent::assignMember($name, $value),
            'template_id' => is_string($value) ? $this->template_id = $value : parent::assignMember($name, $value),
            'version_id_override' => is_string($value) ? $this->version_id_override = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
