<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Contactdb;

/**
 * Create a Segment request
 * Example: {"name":"Last Name Miller","list_id":4,"conditions":[{"field":"last_name","value":"Miller","operator":"eq","and_or":""},{"field":"last_clicked","value":"01/02/2015","operator":"gt","and_or":"and"},{"field":"clicks.campaign_identifier","value":"513","operator":"eq","and_or":"or"}],"recipient_count":1234}
 */
final class Segments extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'conditions',
        'name',
    ];

    /**
     * The conditions for a recipient to be included in this segment.
     */
    public \SendGridSDK\Collections\Contactdb\Segments\ConditionsCollection $conditions;
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
            'list_id' => is_int($value) ? $this->list_id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'recipient_count' => is_float($value) ? $this->recipient_count = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
