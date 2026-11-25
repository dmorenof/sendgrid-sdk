<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\EventWebhook\Test;

/**
 * Send Event Webhook Test Request
 * Example: {"id":"77d4a5da-7015-11ed-a1eb-0242ac120002","url":"https://emailengagment.example.com","oauth_client_id":"a835e7210bbb47edbfa71bdfc909b2d7","oauth_client_secret":"335a9b0c65324fd2a62e2953d4b158","oauth_token_url":"https://oauthservice.example.com"}
 */
final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'url',
    ];

    /**
     * The ID of the Event Webhook you want to retrieve.
     */
    public string $id;
    /**
     * The client ID Twilio SendGrid sends to your OAuth server or service provider to generate an OAuth access token. When passing data in this property, you must also include the `oauth_token_url` property.
     */
    public ?string $oauth_client_id;
    /**
     * The `oauth_client_secret` is needed only once to create an access token. SendGrid will store this secret, allowing you to update your Client ID and Token URL without passing the secret to SendGrid again. When passing data in this field, you must also include the `oauth_client_id` and `oauth_token_url` properties.
     */
    public ?string $oauth_client_secret;
    /**
     * The URL where Twilio SendGrid sends the Client ID and Client Secret to generate an access token. This should be your OAuth server or service provider. When passing data in this field, you must also include the `oauth_client_id` property.
     */
    public ?string $oauth_token_url;
    /**
     * The URL where you would like the test notification to be sent.
     */
    public string $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'oauth_client_id' => $value === null || is_string($value) ? $this->oauth_client_id = $value : parent::assignMember($name, $value),
            'oauth_client_secret' => $value === null || is_string($value) ? $this->oauth_client_secret = $value : parent::assignMember($name, $value),
            'oauth_token_url' => $value === null || is_string($value) ? $this->oauth_token_url = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
