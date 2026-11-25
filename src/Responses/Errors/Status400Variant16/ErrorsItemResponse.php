<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\Errors\Status400Variant16;

final class ErrorsItemResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The ID of a Webhook that exists on your account that is already configured to send events to the endpoint URL you provided.
     */
    public string $id;
    /**
     * Error message.
     */
    public string $message;
    /**
     * The URL that is already configured as a Webhook endpoint for one of your existing Webhooks.
     */
    public string $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
