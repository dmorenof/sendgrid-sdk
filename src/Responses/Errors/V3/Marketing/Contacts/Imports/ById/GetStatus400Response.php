<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\Errors\V3\Marketing\Contacts\Imports\ById;

final class GetStatus400Response extends \Dmorenof\SdkRuntime\DTO
{
    public \SendGridSDK\DTOs\ContactsError $errors;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'errors' => $value instanceof \stdClass ? $this->errors = new \SendGridSDK\DTOs\ContactsError($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
