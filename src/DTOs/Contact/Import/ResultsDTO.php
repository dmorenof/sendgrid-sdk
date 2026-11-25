<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Contact\Import;

/**
 * Result map of the import job.
 */
final class ResultsDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Created contact count from the import.
     */
    public float $created_count;
    /**
     * Count of deleted contacts that resulted in error.
     */
    public float $deleted_count;
    /**
     * Count of imported contacts that resulted in error.
     */
    public float $errored_count;
    /**
     * The download URL of the file which provides information about any errors.
     */
    public string $errors_url;
    /**
     * Requested contact count from the import.
     */
    public float $requested_count;
    /**
     * Updated contact count from the import.
     */
    public float $updated_count;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'created_count' => is_float($value) ? $this->created_count = $value : parent::assignMember($name, $value),
            'deleted_count' => is_float($value) ? $this->deleted_count = $value : parent::assignMember($name, $value),
            'errored_count' => is_float($value) ? $this->errored_count = $value : parent::assignMember($name, $value),
            'errors_url' => is_string($value) ? $this->errors_url = $value : parent::assignMember($name, $value),
            'requested_count' => is_float($value) ? $this->requested_count = $value : parent::assignMember($name, $value),
            'updated_count' => is_float($value) ? $this->updated_count = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
