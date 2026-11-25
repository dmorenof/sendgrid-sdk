<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Api\Key;

/**
 * API Key Name and ID
 * Example: {"api_key_id":"qfTQ6KG0QBiwWdJ0-pCLCA","name":"Mail Send"}
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The ID of your API Key.
     */
    public string $api_key_id;
    /**
     * The name of your API Key.
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'api_key_id' => is_string($value) ? $this->api_key_id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
