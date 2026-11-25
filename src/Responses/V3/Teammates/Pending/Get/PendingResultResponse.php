<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Teammates\Pending\Get;

final class PendingResultResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Email address teammate invite will be sent to
     */
    public string $email;
    /**
     * timestamp indicates when invite will expire. Expiration is 7 days after invite creation
     */
    public int $expiration_date;
    /**
     * Set to true to indicate teammate should have the same set of permissions as parent user
     */
    public bool $is_admin;
    /**
     * List of permissions to give teammate if they accept
     */
    public \SendGridSDK\Collections\StringCollection $scopes;
    /**
     * Invitation token used to identify user
     */
    public string $token;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'expiration_date' => is_int($value) ? $this->expiration_date = $value : parent::assignMember($name, $value),
            'is_admin' => is_bool($value) ? $this->is_admin = $value : parent::assignMember($name, $value),
            'scopes' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->scopes = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'token' => is_string($value) ? $this->token = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
