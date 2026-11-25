<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\User\Webhooks\Security\Policies\ById\Get;

final class ByIdPolicyResponse extends \Dmorenof\SdkRuntime\DTO
{
    public string $id;
    public string $name;
    public \SendGridSDK\Responses\V3\User\Webhooks\Security\Policies\ById\Get\Policy\PolicyOauthResponse $oauth;
    public \SendGridSDK\Responses\V3\User\Webhooks\Security\Policies\ById\Get\Policy\PolicySignatureResponse $signature;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
