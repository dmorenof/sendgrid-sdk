<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\AddRecipientBodyItem;

final class RecipientBodyRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'email',
    ];

    public int $age;
    /**
     * The email address of the recipient.
     * Format: email
     */
    public string $email;
    /**
     * The first name of the recipient.
     */
    public string $first_name;
    /**
     * The last name of the recipient.
     */
    public string $last_name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'age' => is_int($value) ? $this->age = $value : parent::assignMember($name, $value),
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'first_name' => is_string($value) ? $this->first_name = $value : parent::assignMember($name, $value),
            'last_name' => is_string($value) ? $this->last_name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
