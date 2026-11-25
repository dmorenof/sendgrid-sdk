<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Logs\Error;

/**
 * Standard SendGrid error response.
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \SendGridSDK\Collections\Logs\Error\Response\ErrorsCollection $errors;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'errors' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->errors = new \SendGridSDK\Collections\Logs\Error\Response\ErrorsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendGridSDK\DTOs\Logs\Error::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
