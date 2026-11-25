<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Marketing\Contacts\Batch;

/**
 * Array of IDs
 * Example: {"ids":["1234","1235"]}
 */
final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'ids',
    ];

    protected const array VALIDATION = [
        'ids' => [
            'maxItems' => 100,
        ],
    ];

    public \SendGridSDK\Collections\StringCollection $ids {
        set {
            $this->assigning('ids', $value);
            $this->ids = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->ids = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
