<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Marketing\Contacts\Search\Emails;

/**
 * Example: {"emails":["jane_doe&#64;example.com","john_doe&#64;example.com","joann_doe&#64;example.com"]}
 */
final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'emails',
    ];

    protected const array VALIDATION = [
        'anonymous_id' => [
            'maxLength' => 254,
        ],
        'external_id' => [
            'maxLength' => 254,
        ],
    ];

    /**
     * The contact's Anonymous ID.
     */
    public string $anonymous_id {
        set {
            $this->assigning('anonymous_id', $value);
            $this->anonymous_id = $value;
        }
    }
    /**
     * One or more primary and/or alternate email addresses to search for in your Marketing Campaigns contacts.
     */
    public \SendGridSDK\Collections\V3\Marketing\Contacts\Search\Emails\Post\EmailsEmailsCollection $emails;
    /**
     * The contact's External ID.
     */
    public string $external_id {
        set {
            $this->assigning('external_id', $value);
            $this->external_id = $value;
        }
    }
    /**
     * The contact's Phone Number ID. This is required to be a valid phone number.
     */
    public string $phone_number_id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'anonymous_id' => is_string($value) ? $this->anonymous_id = $value : parent::assignMember($name, $value),
            'emails' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->emails = new \SendGridSDK\Collections\V3\Marketing\Contacts\Search\Emails\Post\EmailsEmailsCollection($value) : parent::assignMember($name, $value),
            'external_id' => is_string($value) ? $this->external_id = $value : parent::assignMember($name, $value),
            'phone_number_id' => is_string($value) ? $this->phone_number_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
