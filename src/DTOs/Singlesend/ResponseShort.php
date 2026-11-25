<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Singlesend;

/**
 * singlesend_response_short
 */
final class ResponseShort extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'abtest',
        'categories',
        'created_at',
        'id',
        'is_abtest',
        'name',
        'status',
        'updated_at',
    ];

    protected const array VALIDATION = [
        'categories' => [
            'maxItems' => 10,
            'uniqueItems' => true,
        ],
        'name' => [
            'minLength' => 1,
            'maxLength' => 100,
        ],
    ];

    public \SendGridSDK\DTOs\Ab\TestSummary $abtest;
    /**
     * categories to associate with this Single Send
     */
    public \SendGridSDK\Collections\AllSegments200\ListIdsCollection $categories {
        set {
            $this->assigning('categories', $value);
            $this->categories = $value;
        }
    }
    /**
     * the ISO 8601 time at which the Single Send was created
     * Format: date-time
     */
    public string $created_at;
    /**
     * Format: uuid
     */
    public string $id;
    /**
     * true if the Single Send's AB Test functionality has been toggled on
     */
    public bool $is_abtest;
    /**
     * name of the Single Send
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * The ISO 8601 time at which to send the Single Send. This must be in future or the string `now`. SendGrid [Mail Send](https://docs.sendgrid.com/api-reference/mail-send/mail-send) emails can be scheduled up to 72 hours in advance. However, this scheduling constraint does not apply to emails sent via [Marketing Campaigns](https://docs.sendgrid.com/ui/sending-email/how-to-send-email-with-marketing-campaigns/).
     * Format: date-time
     */
    public string $send_at;
    /**
     * current status of the Single Send
     */
    public \SendGridSDK\Enums\Mc\SinglesendsStatus3 $status;
    /**
     * the ISO 8601 time at which the Single Send was last updated
     * Format: date-time
     */
    public string $updated_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'abtest' => $value instanceof \stdClass ? $this->abtest = new \SendGridSDK\DTOs\Ab\TestSummary($value) : parent::assignMember($name, $value),
            'categories' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->categories = new \SendGridSDK\Collections\AllSegments200\ListIdsCollection($value) : parent::assignMember($name, $value),
            'created_at' => is_string($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'is_abtest' => is_bool($value) ? $this->is_abtest = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'send_at' => is_string($value) ? $this->send_at = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \SendGridSDK\Enums\Mc\SinglesendsStatus3::from($value) : parent::assignMember($name, $value),
            'updated_at' => is_string($value) ? $this->updated_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
