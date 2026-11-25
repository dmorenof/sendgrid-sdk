<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Marketing\Contacts\Search\Identifiers\ByIdentifierType\Post;

/**
 * An identifiers value matching a searched identifier in your contacts. For example, if you use the email identifier type, the email address will be returned.
 */
final class ResultValueResponse extends \Dmorenof\SdkRuntime\DTO
{
    public \SendGridSDK\DTOs\Contact\Details3 $contact;
    public string $error;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'contact' => $value instanceof \stdClass ? $this->contact = new \SendGridSDK\DTOs\Contact\Details3($value) : parent::assignMember($name, $value),
            'error' => is_string($value) ? $this->error = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
