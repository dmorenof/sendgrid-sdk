<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Validations\Email;

/**
 * Example: {"email":"example&#64;example.com","source":"signup"}
 */
final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'email',
    ];

    /**
     * The email address that you want to validate.
     */
    public string $email;
    /**
     * A one-word classifier for where this validation originated.
     */
    public string $source;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'source' => is_string($value) ? $this->source = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
