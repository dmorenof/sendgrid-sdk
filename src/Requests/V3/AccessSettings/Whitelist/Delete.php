<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\AccessSettings\Whitelist;

/**
 * Example: {"ids":[1,2,3]}
 */
final class Delete extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * An array of the IDs of the IP address that you want to remove from your allow list.
     */
    public \SendGridSDK\Collections\IntegerCollection $ids;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->ids = new \SendGridSDK\Collections\IntegerCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
