<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Campaigns\ByCampaignId;

final class Get extends \Dmorenof\SdkRuntime\DTO
{
    public \SendGridSDK\Collections\StringCollection $categories;
    public string $custom_unsubscribe_url;
    public string $html_content;
    public int $id;
    public string $ip_pool;
    public \SendGridSDK\Collections\IntegerCollection $list_ids;
    public string $plain_content;
    public \SendGridSDK\Collections\IntegerCollection $segment_ids;
    public int $sender_id;
    public string $status;
    public string $subject;
    public int $suppression_group_id;
    public string $title;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'categories' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->categories = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'custom_unsubscribe_url' => is_string($value) ? $this->custom_unsubscribe_url = $value : parent::assignMember($name, $value),
            'html_content' => is_string($value) ? $this->html_content = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'ip_pool' => is_string($value) ? $this->ip_pool = $value : parent::assignMember($name, $value),
            'list_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->list_ids = new \SendGridSDK\Collections\IntegerCollection($value) : parent::assignMember($name, $value),
            'plain_content' => is_string($value) ? $this->plain_content = $value : parent::assignMember($name, $value),
            'segment_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->segment_ids = new \SendGridSDK\Collections\IntegerCollection($value) : parent::assignMember($name, $value),
            'sender_id' => is_int($value) ? $this->sender_id = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = $value : parent::assignMember($name, $value),
            'subject' => is_string($value) ? $this->subject = $value : parent::assignMember($name, $value),
            'suppression_group_id' => is_int($value) ? $this->suppression_group_id = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
