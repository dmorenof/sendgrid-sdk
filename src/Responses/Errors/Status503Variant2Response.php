<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\Errors;

/**
 * Service Unavailable
 */
final class Status503Variant2Response extends \Dmorenof\SdkRuntime\DTO
{
    public \SendGridSDK\Collections\Errors\Status400Variant15\Status400Variant15ErrorsCollection $errors;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'errors' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->errors = new \SendGridSDK\Collections\Errors\Status400Variant15\Status400Variant15ErrorsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendGridSDK\DTOs\Ip\ProvisioningError\Response::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
