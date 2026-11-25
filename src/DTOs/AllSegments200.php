<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs;

/**
 * all_segments_response
 */
final class AllSegments200 extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'contacts_count',
        'created_at',
        'id',
        'name',
        'next_sample_update',
        'parent_list_ids',
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

    public \SendGridSDK\DTOs\Mc\Segments20Metadata $_metadata;
    /**
     * Total number of contacts present in the segment
     */
    public int $contacts_count;
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
     * If not set, segment contains a query for use with Segment v1 APIs. If set to '2', segment contains a SQL query for use in v2.
     */
    public string $query_version;
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
            '_metadata' => $value instanceof \stdClass ? $this->_metadata = new \SendGridSDK\DTOs\Mc\Segments20Metadata($value) : parent::assignMember($name, $value),
            'contacts_count' => is_int($value) ? $this->contacts_count = $value : parent::assignMember($name, $value),
            'created_at' => is_string($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'next_sample_update' => is_string($value) ? $this->next_sample_update = $value : parent::assignMember($name, $value),
            'parent_list_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->parent_list_ids = new \SendGridSDK\Collections\AllSegments200\ListIdsCollection($value) : parent::assignMember($name, $value),
            'query_version' => is_string($value) ? $this->query_version = $value : parent::assignMember($name, $value),
            'sample_updated_at' => is_string($value) ? $this->sample_updated_at = $value : parent::assignMember($name, $value),
            'status' => $value instanceof \stdClass ? $this->status = new \SendGridSDK\DTOs\Segment\Status\Response($value) : parent::assignMember($name, $value),
            'updated_at' => is_string($value) ? $this->updated_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
