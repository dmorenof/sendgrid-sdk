<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Contactdb\Lists;

/**
 * List All Lists response
 */
final class Get extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'lists',
    ];

    public \SendGridSDK\Collections\V3\Contactdb\Lists\Get\ListsListsCollection $lists;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'lists' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->lists = new \SendGridSDK\Collections\V3\Contactdb\Lists\Get\ListsListsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendGridSDK\DTOs\Contactdb\List2Xx::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
