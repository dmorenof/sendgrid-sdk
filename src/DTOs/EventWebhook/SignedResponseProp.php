<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\EventWebhook;

final class SignedResponseProp extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The public key you can use to verify the SendGrid signature.
     */
    public string $public_key;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'public_key' => is_string($value) ? $this->public_key = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
