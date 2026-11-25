<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\User\Webhooks\Event\Settings\Signed\ById;

final class Patch extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * A unique string used to identify the webhook. A webhook's ID is generated programmatically and cannot be changed after creation. You can assign a natural language identifier to your webhook using the `friendly_name` property.
     */
    public string $id;
    /**
     * The public key you can use to verify the Twilio SendGrid signature.
     */
    public string $public_key;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'public_key' => is_string($value) ? $this->public_key = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
