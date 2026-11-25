<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Whitelabel\Domains\ByDomainId\SubuserAdd;

/**
 * Example: {"username":"jdoe"}
 */
final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'username',
    ];

    /**
     * Username to associate with the authenticated domain.
     */
    public string $username;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'username' => is_string($value) ? $this->username = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
