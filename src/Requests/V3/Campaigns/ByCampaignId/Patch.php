<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Campaigns\ByCampaignId;

/**
 * Update a Campaign request
 * Example: {"title":"May Newsletter","subject":"New Products for Summer!","categories":["summer line"],"html_content":"<html><head><title></title></head><body><p>Check out our summer line!</p></body></html>","plain_content":"Check out our summer line!"}
 */
final class Patch extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'categories',
        'html_content',
        'plain_content',
        'subject',
        'title',
    ];

    /**
     * The categories you want to tag on this campaign.
     */
    public \SendGridSDK\Collections\StringCollection $categories;
    /**
     * The HTML content of this campaign.
     */
    public string $html_content;
    /**
     * The plain content of this campaign.
     */
    public string $plain_content;
    /**
     * The subject line for your campaign.
     */
    public string $subject;
    /**
     * The title of the campaign.
     */
    public string $title;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'categories' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->categories = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'html_content' => is_string($value) ? $this->html_content = $value : parent::assignMember($name, $value),
            'plain_content' => is_string($value) ? $this->plain_content = $value : parent::assignMember($name, $value),
            'subject' => is_string($value) ? $this->subject = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
