<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Post\Campaigns;

/**
 * Campaigns Request
 * Example: {"id":986724,"title":"May Newsletter","subject":"New Products for Summer!","sender_id":124451,"list_ids":[110,124],"segment_ids":[110],"categories":["summer line"],"suppression_group_id":42,"custom_unsubscribe_url":"","ip_pool":"marketing","html_content":"<html><head><title></title></head><body><p>Check out our summer line!</p></body></html>","plain_content":"Check out our summer line!","status":"Draft"}
 */
final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'title',
    ];

    /**
     * The categories you would like associated to this campaign.
     */
    public ?\SendGridSDK\Collections\StringCollection $categories;
    /**
     * This is the url of the custom unsubscribe page that you provide for customers to unsubscribe from your suppression groups.
     */
    public ?string $custom_unsubscribe_url;
    /**
     * The editor used in the UI.
     */
    public \SendGridSDK\Enums\Editor $editor;
    /**
     * The HTML of your marketing email.
     */
    public ?string $html_content;
    /**
     * The pool of IPs that you would like to send this email from.
     */
    public ?string $ip_pool;
    /**
     * The IDs of the lists you are sending this campaign to. You can have both segment IDs and list IDs
     */
    public ?\SendGridSDK\Collections\IntegerCollection $list_ids;
    /**
     * The plain text content of your emails.
     */
    public ?string $plain_content;
    /**
     * The segment IDs that you are sending this list to. You can have both segment IDs and list IDs. Segments are limited to 10 segment IDs.
     */
    public ?\SendGridSDK\Collections\IntegerCollection $segment_ids;
    /**
     * The ID of the "sender" identity that you have created. Your recipients will see this as the "from" on your marketing emails.
     */
    public ?int $sender_id;
    /**
     * The subject of your campaign that your recipients will see.
     */
    public ?string $subject;
    /**
     * The suppression group that this marketing email belongs to, allowing recipients to opt-out of emails of this type.
     */
    public ?int $suppression_group_id;
    /**
     * The display title of your campaign. This will be viewable by you in the Marketing Campaigns UI.
     */
    public string $title;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'categories' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item))) ? $this->categories = $value === null ? null : new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'custom_unsubscribe_url' => $value === null || is_string($value) ? $this->custom_unsubscribe_url = $value : parent::assignMember($name, $value),
            'editor' => is_string($value) ? $this->editor = \SendGridSDK\Enums\Editor::from($value) : parent::assignMember($name, $value),
            'html_content' => $value === null || is_string($value) ? $this->html_content = $value : parent::assignMember($name, $value),
            'ip_pool' => $value === null || is_string($value) ? $this->ip_pool = $value : parent::assignMember($name, $value),
            'list_ids' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item))) ? $this->list_ids = $value === null ? null : new \SendGridSDK\Collections\IntegerCollection($value) : parent::assignMember($name, $value),
            'plain_content' => $value === null || is_string($value) ? $this->plain_content = $value : parent::assignMember($name, $value),
            'segment_ids' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item))) ? $this->segment_ids = $value === null ? null : new \SendGridSDK\Collections\IntegerCollection($value) : parent::assignMember($name, $value),
            'sender_id' => $value === null || is_int($value) ? $this->sender_id = $value : parent::assignMember($name, $value),
            'subject' => $value === null || is_string($value) ? $this->subject = $value : parent::assignMember($name, $value),
            'suppression_group_id' => $value === null || is_int($value) ? $this->suppression_group_id = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
