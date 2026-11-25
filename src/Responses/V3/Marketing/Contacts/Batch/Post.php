<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Marketing\Contacts\Batch;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public \SendGridSDK\Collections\V3\Marketing\Contacts\Get\ContactsResultCollection $result;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'result' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->result = new \SendGridSDK\Collections\V3\Marketing\Contacts\Get\ContactsResultCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendGridSDK\DTOs\Contact\Details3::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
