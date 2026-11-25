<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Singlesend;

/**
 * singlesend_request
 */
final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'name',
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

    /**
     * The categories to associate with this Single Send.
     */
    public \SendGridSDK\Collections\AllSegments200\ListIdsCollection $categories {
        set {
            $this->assigning('categories', $value);
            $this->categories = $value;
        }
    }
    public \SendGridSDK\DTOs\Singlesend\Request\EmailConfigDTO $email_config;
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
     * Set this property to an ISO 8601 formatted date-time when you would like to send the Single Send. Please note that any `send_at` property value set with this endpoint will prepopulate the send date in the SendGrid user interface (UI). However, the Single Send will remain an unscheduled draft until it's updated with the [**Schedule Single Send**](https://docs.sendgrid.com/api-reference/single-sends/schedule-single-send) endpoint or SendGrid application UI. Additionally, the `now` keyword is a valid `send_at` value only when using the Schedule Single Send endpoint. Setting this property to `now` with this endpoint will cause an error.
     * Format: date-time
     */
    public ?string $send_at;
    public \SendGridSDK\DTOs\Singlesend\Request\SendToDTO $send_to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'categories' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->categories = new \SendGridSDK\Collections\AllSegments200\ListIdsCollection($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'send_at' => $value === null || is_string($value) ? $this->send_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
