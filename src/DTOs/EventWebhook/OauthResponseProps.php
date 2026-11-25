<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\EventWebhook;

final class OauthResponseProps extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The OAuth client ID SendGrid sends to your OAuth server or service provider to generate an OAuth access token.
     */
    public ?string $oauth_client_id;
    /**
     * The URL where SendGrid sends the OAuth client ID and client secret to generate an access token. This should be your OAuth server or service provider.
     */
    public ?string $oauth_token_url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'oauth_client_id' => $value === null || is_string($value) ? $this->oauth_client_id = $value : parent::assignMember($name, $value),
            'oauth_token_url' => $value === null || is_string($value) ? $this->oauth_token_url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
