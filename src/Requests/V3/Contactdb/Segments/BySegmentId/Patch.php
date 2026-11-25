<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Contactdb\Segments\BySegmentId;

/**
 * Example: {"name":"The Millers","list_id":5,"conditions":[{"field":"last_name","value":"Miller","operator":"eq","and_or":""}]}
 */
final class Patch extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'name',
    ];

    /**
     * The conditions by which this segment should be created.
     */
    public \SendGridSDK\Collections\Contactdb\Segments\ConditionsCollection $conditions;
    /**
     * The list ID you would like this segment to be built from.
     */
    public float $list_id;
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'conditions' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->conditions = new \SendGridSDK\Collections\Contactdb\Segments\ConditionsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendGridSDK\DTOs\Contactdb\SegmentsConditions::class)) : parent::assignMember($name, $value),
            'list_id' => is_float($value) ? $this->list_id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
