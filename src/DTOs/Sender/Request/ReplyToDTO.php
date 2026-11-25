<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Sender\Request;

final class ReplyToDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The email address to which your recipient will reply.
     */
    public string $email;
    /**
     * The name appended to the reply to email field. Typically your name or company name.
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
