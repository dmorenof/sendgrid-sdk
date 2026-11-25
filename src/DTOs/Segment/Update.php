<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Segment;

/**
 * segment_update
 */
final class Update extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'name' => [
            'minLength' => 1,
            'maxLength' => 100,
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
     * SQL query which will filter contacts based on the conditions provided
     */
    public string $query_dsl;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'query_dsl' => is_string($value) ? $this->query_dsl = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
