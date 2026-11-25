<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\User\Webhooks\Security\Policies\ById\Get\Policy;

final class PolicyOauthResponse extends \Dmorenof\SdkRuntime\DTO
{
    public string $client_id;
    public \SendGridSDK\Collections\StringCollection $scopes;
    public string $token_url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'client_id' => is_string($value) ? $this->client_id = $value : parent::assignMember($name, $value),
            'scopes' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->scopes = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'token_url' => is_string($value) ? $this->token_url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
