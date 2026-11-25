<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs;

/**
 * full_segment
 * Example: {"id":"58567a46-305e-48d1-b4f8-a006c906920e","contacts_count":9266921,"created_at":"2085-08-08T21:07:05.692Z","sample_updated_at":"3407-09-25T04:25:02.140Z","updated_at":"4431-05-07T22:23:22.352Z","contacts_sample":[{"id":"c1183ada-b784-49ac-9b1f-50e73578a6dc","email":"ft88&#64;d.izxx","external_id":"1234","alternate_emails":["yKDUP11FDch&#64;QoU.vwy","ZNSN5&#64;czAMqPi.at","7wr51kFVVKlcBSH&#64;DWxOueOZepetzBrku.qosk","iib-ObtO7Fxz5&#64;vLJPRIFKPOqJGCEqcIDab.ypn"],"first_name":"est","last_name":"eiusmod in laboris velit cupidatat","address_line_1":"sunt aliqua","address_line_2":"sit proident Lorem veniam labore","city":"ȎţȸÛ\tč\u000bCŁ","state_province_region":"ut proident","postal_code":30296612,"country":"do reprehenderit qui","custom_fields":{"custom_field_name2":"in consectetur ut aliqua sint","custom_field_name1":"esse"}}],"name":"culpa","query_dsl":"cillum eiusmod","parent_list_id":"2357714d-3d82-4c80-826c-b44a4147f81c","next_sample_update":""}
 */
final class FullSegment extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'contacts_count',
        'contacts_sample',
        'created_at',
        'id',
        'name',
        'query_dsl',
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
        'parent_list_ids' => [
            'uniqueItems' => true,
        ],
    ];

    public int $contacts_count;
    public \SendGridSDK\Collections\FullSegment\ContactsSampleCollection $contacts_sample;
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
     * AST representation of the query DSL
     */
    public \SendGridSDK\DTOs\FullSegment\QueryJsonDTO $query_json;
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
            'contacts_sample' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->contacts_sample = new \SendGridSDK\Collections\FullSegment\ContactsSampleCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendGridSDK\DTOs\Contact\Response::class)) : parent::assignMember($name, $value),
            'created_at' => is_string($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'next_sample_update' => is_string($value) ? $this->next_sample_update = $value : parent::assignMember($name, $value),
            'parent_list_id' => is_string($value) ? $this->parent_list_id = $value : parent::assignMember($name, $value),
            'parent_list_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->parent_list_ids = new \SendGridSDK\Collections\AllSegments200\ListIdsCollection($value) : parent::assignMember($name, $value),
            'query_dsl' => is_string($value) ? $this->query_dsl = $value : parent::assignMember($name, $value),
            'sample_updated_at' => is_string($value) ? $this->sample_updated_at = $value : parent::assignMember($name, $value),
            'updated_at' => is_string($value) ? $this->updated_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
