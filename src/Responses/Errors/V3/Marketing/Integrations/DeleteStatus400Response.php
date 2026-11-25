<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\Errors\V3\Marketing\Integrations;

final class DeleteStatus400Response extends \Dmorenof\SdkRuntime\DTO
{
    public \SendGridSDK\Collections\Errors\V3\Marketing\Integrations\DeleteStatus400\DeleteStatus400ErrorsCollection $errors;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'errors' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->errors = new \SendGridSDK\Collections\Errors\V3\Marketing\Integrations\DeleteStatus400\DeleteStatus400ErrorsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendGridSDK\DTOs\Invalid\Delete\Request::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
