<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Marketing\Contacts\Exports\Post;

final class ExportsNotificationsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public bool $email;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'email' => is_bool($value) ? $this->email = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
