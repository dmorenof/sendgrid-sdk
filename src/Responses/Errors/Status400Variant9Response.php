<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\Errors;

final class Status400Variant9Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'errors',
    ];

    protected const array VALIDATION = [
        'errors' => [
            'uniqueItems' => true,
        ],
    ];

    public \SendGridSDK\Collections\Errors\Status400Variant9\Status400Variant9ErrorsCollection $errors {
        set {
            $this->assigning('errors', $value);
            $this->errors = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'errors' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->errors = new \SendGridSDK\Collections\Errors\Status400Variant9\Status400Variant9ErrorsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendGridSDK\DTOs\Custom\FieldsError::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
