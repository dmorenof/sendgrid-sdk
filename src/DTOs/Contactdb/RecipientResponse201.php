<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Contactdb;

/**
 * ContactDB: Recipient response
 * Example: {"error_count":1,"error_indices":[2],"new_count":2,"persisted_recipients":["YUBh","bWlsbGVyQG1pbGxlci50ZXN0"],"updated_count":0,"errors":[{"message":"Invalid email.","error_indices":[2]}]}
 */
final class RecipientResponse201 extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'error_count',
        'new_count',
        'persisted_recipients',
        'updated_count',
    ];

    /**
     * The number of errors found while adding recipients.
     */
    public float $error_count;
    /**
     * The indices of the recipient(s) sent that caused the error.
     */
    public \SendGridSDK\Collections\FloatCollection $error_indices;
    public \SendGridSDK\Collections\Contactdb\RecipientResponse201\ErrorsCollection $errors;
    /**
     * The count of new recipients added to the contactdb.
     */
    public float $new_count;
    /**
     * The recipient IDs of the recipients that already existed from this request.
     */
    public \SendGridSDK\Collections\StringCollection $persisted_recipients;
    /**
     * The recipients who were updated from this request.
     */
    public float $updated_count;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'error_count' => is_float($value) ? $this->error_count = $value : parent::assignMember($name, $value),
            'error_indices' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_float($item)) ? $this->error_indices = new \SendGridSDK\Collections\FloatCollection($value) : parent::assignMember($name, $value),
            'new_count' => is_float($value) ? $this->new_count = $value : parent::assignMember($name, $value),
            'persisted_recipients' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->persisted_recipients = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'updated_count' => is_float($value) ? $this->updated_count = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
