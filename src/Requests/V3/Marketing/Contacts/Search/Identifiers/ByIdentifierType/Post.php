<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Marketing\Contacts\Search\Identifiers\ByIdentifierType;

/**
 * Example: {"identifiers":["contact&#64;example.com"]}
 */
final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'identifiers',
    ];

    /**
     * One or more more identifier values of the given identifier type to search for in your Marketing Campaigns contacts.
     */
    public \SendGridSDK\Collections\StringCollection $identifiers;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'identifiers' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->identifiers = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
