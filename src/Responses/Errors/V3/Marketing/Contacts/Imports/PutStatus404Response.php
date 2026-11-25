<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\Errors\V3\Marketing\Contacts\Imports;

/**
 * If any of the specified lists do not exist.
 */
final class PutStatus404Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'errors',
    ];

    protected const array VALIDATION = [
        'errors' => [
            'uniqueItems' => true,
        ],
    ];

    public \SendGridSDK\Collections\Errors\V3\Marketing\Contacts\Imports\PutStatus400\PutStatus400ErrorsCollection $errors {
        set {
            $this->assigning('errors', $value);
            $this->errors = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'errors' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->errors = new \SendGridSDK\Collections\Errors\V3\Marketing\Contacts\Imports\PutStatus400\PutStatus400ErrorsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendGridSDK\DTOs\ContactsError::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
