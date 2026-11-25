<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs;

/**
 * segment_response
 */
final class Segment2xx extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'contacts_count',
        'contacts_sample',
        'created_at',
        'id',
        'name',
        'next_sample_update',
        'parent_list_ids',
        'query_dsl',
        'query_version',
        'sample_updated_at',
        'status',
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
        'parent_list_ids' => [
            'uniqueItems' => true,
        ],
    ];

    /**
     * Total number of contacts present in the segment
     */
    public int $contacts_count;
    /**
     * A subset of all contacts that are in this segment
     */
    public \SendGridSDK\Collections\FullSegment\ContactsSampleCollection $contacts_sample;
    /**
     * ISO8601 timestamp of when the object was created
     */
    public string $created_at;
    /**
     * ID assigned to the segment when created.
     * Format: uuid
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * The ISO8601 timestamp when the segment was last refreshed in UTC time.
     */
    public string $last_refreshed_at;
    /**
     * The maximum number of manual refreshes allowed per day for this segment. Currently, only 2 are allowed.
     */
    public int $max_refreshes;
    /**
     * Name of the segment.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * ISO8601 timestamp of when the samples will be next updated
     */
    public string $next_sample_update;
    /**
     * The array of list ids to filter contacts on when building this segment. It allows only one such list id for now. We will support more in future
     */
    public \SendGridSDK\Collections\AllSegments200\ListIdsCollection $parent_list_ids {
        set {
            $this->assigning('parent_list_ids', $value);
            $this->parent_list_ids = $value;
        }
    }
    /**
     * SQL query which will filter contacts based on the conditions provided
     */
    public string $query_dsl;
    /**
     * If not set, segment contains a Query for use with Segment v1 APIs. If set to '2', segment contains a SQL query for use in v2.
     */
    public string $query_version;
    /**
     * The number of times a segment has been manually refreshed since start of today in the user's timezone.
     */
    public int $refreshes_used;
    /**
     * ISO8601 timestamp of when the samples were last updated
     */
    public string $sample_updated_at;
    public \SendGridSDK\DTOs\Segment\Status\Response $status;
    /**
     * ISO8601 timestamp of when the object was last updated
     */
    public string $updated_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'contacts_count' => is_int($value) ? $this->contacts_count = $value : parent::assignMember($name, $value),
            'contacts_sample' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->contacts_sample = new \SendGridSDK\Collections\FullSegment\ContactsSampleCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendGridSDK\DTOs\Contact\Response::class)) : parent::assignMember($name, $value),
            'created_at' => is_string($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'last_refreshed_at' => is_string($value) ? $this->last_refreshed_at = $value : parent::assignMember($name, $value),
            'max_refreshes' => is_int($value) ? $this->max_refreshes = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'next_sample_update' => is_string($value) ? $this->next_sample_update = $value : parent::assignMember($name, $value),
            'parent_list_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->parent_list_ids = new \SendGridSDK\Collections\AllSegments200\ListIdsCollection($value) : parent::assignMember($name, $value),
            'query_dsl' => is_string($value) ? $this->query_dsl = $value : parent::assignMember($name, $value),
            'query_version' => is_string($value) ? $this->query_version = $value : parent::assignMember($name, $value),
            'refreshes_used' => is_int($value) ? $this->refreshes_used = $value : parent::assignMember($name, $value),
            'sample_updated_at' => is_string($value) ? $this->sample_updated_at = $value : parent::assignMember($name, $value),
            'status' => $value instanceof \stdClass ? $this->status = new \SendGridSDK\DTOs\Segment\Status\Response($value) : parent::assignMember($name, $value),
            'updated_at' => is_string($value) ? $this->updated_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
