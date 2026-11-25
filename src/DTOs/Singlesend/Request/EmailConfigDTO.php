<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Singlesend\Request;

final class EmailConfigDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The URL allowing recipients to unsubscribe — you must provide this or the `suppression_group_id`.
     * Format: uri
     */
    public ?string $custom_unsubscribe_url;
    /**
     * A `design_id` can be used in place of `html_content`, `plain_content`, and/or `subject`. You can retrieve a design's ID from the ["List Designs" endpoint](https://docs.sendgrid.com/api-reference/designs-api/list-designs) or by pulling it from the design's detail page URL in the Marketing Campaigns App.
     */
    public string $design_id;
    /**
     * The editor — `"design"` or `"code"` — used to modify the Single Send's design in the Marketing Campaigns App.
     */
    public \SendGridSDK\Enums\Editor $editor;
    /**
     * If set to `true`, `plain_content` is always generated from `html_content`. If set to false, `plain_content` is not altered.
     */
    public bool $generate_plain_content;
    /**
     * The HTML content of the Single Send. Do not include this field when using a `design_id`.
     */
    public string $html_content;
    /**
     * The name of the IP Pool from which the Single Send emails are sent.
     */
    public ?string $ip_pool;
    /**
     * The plain text content of the Single Send. Do not include this field when using a `design_id`.
     */
    public string $plain_content;
    /**
     * The ID of the verified Sender. You can retrieve a verified Sender's ID from the ["Get Verified Senders" endpoint](https://www.twilio.com/docs/sendgrid/api-reference/sender-verification/get-all-verified-senders) or by pulling it from the Sender's detail page URL in the SendGrid App.
     */
    public ?int $sender_id;
    /**
     * The subject line of the Single Send. Do not include this field when using a `design_id`.
     */
    public string $subject;
    /**
     * The ID of the Suppression Group to allow recipients to unsubscribe — you must provide this or the `custom_unsubscribe_url`.
     */
    public ?int $suppression_group_id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'custom_unsubscribe_url' => $value === null || is_string($value) ? $this->custom_unsubscribe_url = $value : parent::assignMember($name, $value),
            'design_id' => is_string($value) ? $this->design_id = $value : parent::assignMember($name, $value),
            'editor' => is_string($value) ? $this->editor = \SendGridSDK\Enums\Editor::from($value) : parent::assignMember($name, $value),
            'generate_plain_content' => is_bool($value) ? $this->generate_plain_content = $value : parent::assignMember($name, $value),
            'html_content' => is_string($value) ? $this->html_content = $value : parent::assignMember($name, $value),
            'ip_pool' => $value === null || is_string($value) ? $this->ip_pool = $value : parent::assignMember($name, $value),
            'plain_content' => is_string($value) ? $this->plain_content = $value : parent::assignMember($name, $value),
            'sender_id' => $value === null || is_int($value) ? $this->sender_id = $value : parent::assignMember($name, $value),
            'subject' => is_string($value) ? $this->subject = $value : parent::assignMember($name, $value),
            'suppression_group_id' => $value === null || is_int($value) ? $this->suppression_group_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
