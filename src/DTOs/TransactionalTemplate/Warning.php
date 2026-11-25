<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\TransactionalTemplate;

/**
 * Warning
 * Example: {"message":"A sample warning message."}
 */
final class Warning extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Warning message for the user
     */
    public string $message;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
