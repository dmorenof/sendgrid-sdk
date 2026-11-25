<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Contact;

/**
 * contact-export
 */
final class Export extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'created_at',
        'expires_at',
        'id',
        'status',
        'updated_at',
    ];

    public \SendGridSDK\DTOs\Mc\ContactsMetadata $_metadata;
    /**
     * The ISO8601 timestamp when the export was completed.
     */
    public string $completed_at;
    /**
     * The total number of exported contacts.
     */
    public int $contact_count;
    /**
     * The ISO8601 timestamp when the export was begun.
     */
    public string $created_at;
    /**
     * The ISO8601 timestamp when the exported file on S3 will expire.
     */
    public string $expires_at;
    public string $id;
    /**
     * A human readable message if the status is `failure`.
     */
    public string $message;
    /**
     * The export job's status. Allowed values: `pending`, `ready`, or `failure`.
     */
    public \SendGridSDK\Enums\Mc\ContactsStatus $status;
    /**
     * The ISO8601 timestamp when the export was updated.
     */
    public string $updated_at;
    /**
     * One or more download URLs for the contact file if the status is `ready`.
     */
    public \SendGridSDK\Collections\StringCollection $urls;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            '_metadata' => $value instanceof \stdClass ? $this->_metadata = new \SendGridSDK\DTOs\Mc\ContactsMetadata($value) : parent::assignMember($name, $value),
            'completed_at' => is_string($value) ? $this->completed_at = $value : parent::assignMember($name, $value),
            'contact_count' => is_int($value) ? $this->contact_count = $value : parent::assignMember($name, $value),
            'created_at' => is_string($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'expires_at' => is_string($value) ? $this->expires_at = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \SendGridSDK\Enums\Mc\ContactsStatus::from($value) : parent::assignMember($name, $value),
            'updated_at' => is_string($value) ? $this->updated_at = $value : parent::assignMember($name, $value),
            'urls' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->urls = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
