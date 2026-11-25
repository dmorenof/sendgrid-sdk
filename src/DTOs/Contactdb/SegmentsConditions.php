<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Contactdb;

/**
 * ContactDB: Segments: Conditions
 */
final class SegmentsConditions extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'field',
        'operator',
        'value',
    ];

    public \SendGridSDK\Enums\AndOr $and_or;
    public string $field;
    public \SendGridSDK\Enums\Operator $operator;
    public string $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'and_or' => is_string($value) ? $this->and_or = \SendGridSDK\Enums\AndOr::from($value) : parent::assignMember($name, $value),
            'field' => is_string($value) ? $this->field = $value : parent::assignMember($name, $value),
            'operator' => is_string($value) ? $this->operator = \SendGridSDK\Enums\Operator::from($value) : parent::assignMember($name, $value),
            'value' => is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
