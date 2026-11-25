<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Api\KeyScopes;

/**
 * API Key Name, ID, and Scopes
 * Example: {"api_key_id":"qfTQ6KG0QBiwWdJ0-pCLCA","name":"Mail Send","scopes":["mail.send","mail.batch.create","mail.batch.read","mail.batch.update","mail.batch.delete","user.scheduled_sends.create","user.scheduled_sends.read","user.scheduled_sends.update","user.scheduled_sends.delete","sender_verification_eligible","sender_verification_legacy","2fa_required"]}
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
    /**
     * The permissions this API Key has access to.
     */
    public \SendGridSDK\Collections\StringCollection $scopes;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'api_key_id' => is_string($value) ? $this->api_key_id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'scopes' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->scopes = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
