<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Contactdb;

/**
 * ContactDB:: Segments with ID
 */
final class SegmentsId200 extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'conditions',
        'id',
        'name',
    ];

    /**
     * The conditions for a recipient to be included in this segment.
     */
    public \SendGridSDK\Collections\Contactdb\Segments\ConditionsCollection $conditions;
    /**
     * The ID of the segment.
     */
    public float $id;
    /**
     * The list id from which to make this segment. Not including this ID will mean your segment is created from the main contactdb rather than a list.
     */
    public int $list_id;
    /**
     * The name of this segment.
     */
    public string $name;
    /**
     * The count of recipients in this list. This is not included on creation of segments.
     */
    public float $recipient_count;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'conditions' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->conditions = new \SendGridSDK\Collections\Contactdb\Segments\ConditionsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendGridSDK\DTOs\Contactdb\SegmentsConditions::class)) : parent::assignMember($name, $value),
            'id' => is_float($value) ? $this->id = $value : parent::assignMember($name, $value),
            'list_id' => is_int($value) ? $this->list_id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'recipient_count' => is_float($value) ? $this->recipient_count = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
