<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Segment;

/**
 * segment_write
 */
final class WriteV2 extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'name',
        'query_dsl',
    ];

    protected const array VALIDATION = [
        'name' => [
            'minLength' => 1,
            'maxLength' => 100,
        ],
        'parent_list_ids' => [
            'uniqueItems' => true,
        ],
    ];

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

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'parent_list_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->parent_list_ids = new \SendGridSDK\Collections\AllSegments200\ListIdsCollection($value) : parent::assignMember($name, $value),
            'query_dsl' => is_string($value) ? $this->query_dsl = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
