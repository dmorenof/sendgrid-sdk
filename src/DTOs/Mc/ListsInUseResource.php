<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Mc;

/**
 * in_use_resource
 *
 * A kind of resource that is using a list, and so is blocking its deletion.
 */
final class ListsInUseResource extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'ids',
        'type',
    ];

    /**
     * The IDs of the resources of this type using the list.
     */
    public \SendGridSDK\Collections\StringCollection $ids;
    /**
     * The kind of resource using the list. New values may be added over time, so clients should tolerate an unrecognized type.
     */
    public \SendGridSDK\Enums\Mc\ListsType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->ids = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \SendGridSDK\Enums\Mc\ListsType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
