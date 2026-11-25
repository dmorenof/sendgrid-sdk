<?php

declare(strict_types=1);

namespace SendGridSDK\Requests;

final class RecipientBodyRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'email',
    ];

    /**
     * Format: email
     */
    public string $email;
    /**
     * The first name of the recipient. This is one of the default custom fields.
     */
    public string $first_name;
    /**
     * The last name of the recipient. This is one of the default custom fields.
     */
    public string $last_name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'first_name' => is_string($value) ? $this->first_name = $value : parent::assignMember($name, $value),
            'last_name' => is_string($value) ? $this->last_name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
