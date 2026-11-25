<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Marketing\Contacts\Search;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'contact_count',
    ];

    public \SendGridSDK\DTOs\SelfMetadata $_metadata;
    /**
     * The total number of contacts matched.
     */
    public float $contact_count;
    public \SendGridSDK\Collections\V3\Marketing\Contacts\Get\ContactsResultCollection $result;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            '_metadata' => $value instanceof \stdClass ? $this->_metadata = new \SendGridSDK\DTOs\SelfMetadata($value) : parent::assignMember($name, $value),
            'contact_count' => is_float($value) ? $this->contact_count = $value : parent::assignMember($name, $value),
            'result' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->result = new \SendGridSDK\Collections\V3\Marketing\Contacts\Get\ContactsResultCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendGridSDK\DTOs\Contact\Details3::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
