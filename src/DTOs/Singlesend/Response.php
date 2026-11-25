<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Singlesend;

/**
 * singlesend_response
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
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

    /**
     * The categories associated with this Single Send.
     */
    public \SendGridSDK\Collections\AllSegments200\ListIdsCollection $categories {
        set {
            $this->assigning('categories', $value);
            $this->categories = $value;
        }
    }
    /**
     * the ISO 8601 time at which the Single Send was created.
     * Format: date-time
     */
    public string $created_at;
    public \SendGridSDK\DTOs\Singlesend\Response\EmailConfigDTO $email_config;
    /**
     * The unique ID for the Single Send.
     * Format: uuid
     */
    public string $id;
    /**
     * The name of the Single Send.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * An ISO 8601 formatted date-time when the Single Send is set to be sent. Please note that any `send_at` property value will have no effect while the Single Send `status` is `draft`. You must update the Single Send with the [**Schedule Single Send**](https://docs.sendgrid.com/api-reference/single-sends/schedule-single-send) endpoint or SendGrid application UI to schedule it.
     * Format: date-time
     */
    public ?string $send_at;
    public \SendGridSDK\DTOs\Singlesend\Response\SendToDTO $send_to;
    /**
     * The current status of the Single Send. The status may be `draft`, `scheduled`, or `triggered`.
     */
    public \SendGridSDK\Enums\Mc\SinglesendsStatus2 $status;
    /**
     * the ISO 8601 time at which the Single Send was last updated.
     * Format: date-time
     */
    public string $updated_at;
    public \SendGridSDK\Collections\Singlesend\Response\WarningsCollection $warnings;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'categories' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->categories = new \SendGridSDK\Collections\AllSegments200\ListIdsCollection($value) : parent::assignMember($name, $value),
            'created_at' => is_string($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'send_at' => $value === null || is_string($value) ? $this->send_at = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \SendGridSDK\Enums\Mc\SinglesendsStatus2::from($value) : parent::assignMember($name, $value),
            'updated_at' => is_string($value) ? $this->updated_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
