<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Contactdb\RecipientResponse201;

final class ErrorsDTO extends \Dmorenof\SdkRuntime\DTO
{
    public \SendGridSDK\Collections\FloatCollection $error_indices;
    public string $message;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'error_indices' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_float($item)) ? $this->error_indices = new \SendGridSDK\Collections\FloatCollection($value) : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
