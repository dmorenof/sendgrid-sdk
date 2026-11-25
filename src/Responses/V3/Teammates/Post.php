<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Teammates;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Teammate's email address
     */
    public string $email;
    /**
     * Set to true if teammate should have admin privileges
     */
    public bool $is_admin;
    /**
     * Initial set of permissions to give to teammate if they accept the invite
     *
     * @var list<mixed>
     */
    public array $scopes;
    /**
     * Token to identify invite
     */
    public string $token;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'is_admin' => is_bool($value) ? $this->is_admin = $value : parent::assignMember($name, $value),
            'token' => is_string($value) ? $this->token = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
