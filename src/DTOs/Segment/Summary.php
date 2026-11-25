<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Segment;

/**
 * segment_summary
 */
final class Summary extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'contacts_count',
        'created_at',
        'id',
        'sample_updated_at',
        'updated_at',
    ];

    protected const array VALIDATION = [
        'id' => [
            'minLength' => 36,
            'maxLength' => 36,
        ],
        'name' => [
            'minLength' => 1,
            'maxLength' => 100,
        ],
        'parent_list_id' => [
            'minLength' => 36,
            'maxLength' => 36,
        ],
    ];

    public int $contacts_count;
    /**
     * ISO8601 of created timestamp
     *
     * Format: date-time
     */
    public string $created_at;
    /**
     * Format: uuid
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * ISO8601 string that is equal to `sample_updated_at` plus an internally calculated offset that depends on how often contacts enter or exit segments as the scheduled pipeline updates the samples.
     */
    public string $next_sample_update;
    /**
     * The id of the list if this segment is a child of a list.  This implies the query `AND CONTAINS(list_ids, ${parent_list_id})`
     * Format: uuid
     */
    public string $parent_list_id {
        set {
            $this->assigning('parent_list_id', $value);
            $this->parent_list_id = $value;
        }
    }
    /**
     * ISO8601 timestamp the sample was last updated
     * Format: date-time
     */
    public string $sample_updated_at;
    /**
     * ISO8601 timestamp the object was last updated
     * Format: date-time
     */
    public string $updated_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'contacts_count' => is_int($value) ? $this->contacts_count = $value : parent::assignMember($name, $value),
            'created_at' => is_string($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'next_sample_update' => is_string($value) ? $this->next_sample_update = $value : parent::assignMember($name, $value),
            'parent_list_id' => is_string($value) ? $this->parent_list_id = $value : parent::assignMember($name, $value),
            'sample_updated_at' => is_string($value) ? $this->sample_updated_at = $value : parent::assignMember($name, $value),
            'updated_at' => is_string($value) ? $this->updated_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
