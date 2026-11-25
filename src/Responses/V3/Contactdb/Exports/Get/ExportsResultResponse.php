<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Contactdb\Exports\Get;

final class ExportsResultResponse extends \Dmorenof\SdkRuntime\DTO
{
    public \SendGridSDK\Responses\V3\Contactdb\Exports\Get\ResultItem\ResultItemMetadataResponse $_metadata;
    /**
     * This ISO8601 timestamp when the export was completed.
     */
    public string $completed_at;
    /**
     * This ISO8601 timestamp when the export was created.
     */
    public string $created_at;
    /**
     * This ISO8601 timestamp when the export expires.
     */
    public string $expires_at;
    /**
     * Allowed types: `contacts_export`, `list_export`, or `segment_export`.
     */
    public string $export_type;
    /**
     * Export jobs ID.
     */
    public string $id;
    public \SendGridSDK\Collections\V3\Contactdb\Exports\Get\ResultItem\ResultItemListsCollection $lists;
    public \SendGridSDK\Collections\V3\Contactdb\Exports\Get\ResultItem\ResultItemSegmentsCollection $segments;
    /**
     * Allowed values: `pending`, `ready`, or `failure`.
     */
    public string $status;
    /**
     * One or more download URLs for the recipient file(s) if the status is `ready`.
     */
    public \SendGridSDK\Collections\StringCollection $urls;
    /**
     * User ID.
     */
    public string $user_id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'completed_at' => is_string($value) ? $this->completed_at = $value : parent::assignMember($name, $value),
            'created_at' => is_string($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'expires_at' => is_string($value) ? $this->expires_at = $value : parent::assignMember($name, $value),
            'export_type' => is_string($value) ? $this->export_type = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = $value : parent::assignMember($name, $value),
            'urls' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->urls = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'user_id' => is_string($value) ? $this->user_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
