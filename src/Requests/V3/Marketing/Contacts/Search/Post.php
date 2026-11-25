<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Marketing\Contacts\Search;

/**
 * Example: {"query":"email LIKE 'ENTER_COMPLETE_OR_PARTIAL_EMAIL_ADDRESS_HERE%' AND CONTAINS(list_ids, 'YOUR_LIST_IDs')"}
 */
final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'query',
    ];

    /**
     * An SGQL search string or other pattern.
     */
    public string $query;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'query' => is_string($value) ? $this->query = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
