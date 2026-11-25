<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\Errors;

final class Status404Variant4Response extends \Dmorenof\SdkRuntime\DTO
{
    public \SendGridSDK\Collections\Errors\Status404Variant4\Status404Variant4ErrorsCollection $errors;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'errors' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->errors = new \SendGridSDK\Collections\Errors\Status404Variant4\Status404Variant4ErrorsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendGridSDK\DTOs\Integration\NotFound::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
