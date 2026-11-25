<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Contactdb\Recipients\Search;

/**
 * Example: {"list_id":-27497588,"conditions":[{"and_or":"","field":"birthday","value":"01/12/1985","operator":"eq"},{"and_or":"","field":"birthday","value":"01/12/1985","operator":"eq"},{"and_or":"","field":"birthday","value":"01/12/1985","operator":"eq"},{"and_or":"","field":"birthday","value":"01/12/1985","operator":"eq"}]}
 */
final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'conditions',
        'list_id',
    ];

    protected const array VALIDATION = [
        'list_id' => [
            'format' => 'int32',
        ],
    ];

    /**
     * The conditions by which this segment should be created.
     */
    public \SendGridSDK\Collections\Contactdb\Segments\ConditionsCollection $conditions;
    /**
     * Format: int32
     */
    public int $list_id {
        set {
            $this->assigning('list_id', $value);
            $this->list_id = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'conditions' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->conditions = new \SendGridSDK\Collections\Contactdb\Segments\ConditionsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendGridSDK\DTOs\Contactdb\SegmentsConditions::class)) : parent::assignMember($name, $value),
            'list_id' => is_int($value) ? $this->list_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
