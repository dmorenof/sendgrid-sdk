<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Whitelabel\Links\ByLinkId\Subuser;

/**
 * Example: {"username":"jane&#64;example.com"}
 */
final class Post extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The username of the subuser account that you want to associate the branded link with.
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
