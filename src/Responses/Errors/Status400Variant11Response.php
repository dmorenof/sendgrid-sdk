<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\Errors;

final class Status400Variant11Response extends \Dmorenof\SdkRuntime\DTO
{
    public \SendGridSDK\Collections\Errors\Status400Variant11\Status400Variant11ErrorsCollection $errors;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'errors' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->errors = new \SendGridSDK\Collections\Errors\Status400Variant11\Status400Variant11ErrorsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendGridSDK\DTOs\Mc\ListsError::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
