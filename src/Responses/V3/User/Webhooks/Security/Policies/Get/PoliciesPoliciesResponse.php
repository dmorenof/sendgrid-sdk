<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\User\Webhooks\Security\Policies\Get;

final class PoliciesPoliciesResponse extends \Dmorenof\SdkRuntime\DTO
{
    public string $id;
    public string $name;
    public \SendGridSDK\Responses\V3\User\Webhooks\Security\Policies\Get\PoliciesItem\PoliciesItemOauthResponse $oauth;
    public \SendGridSDK\Responses\V3\User\Webhooks\Security\Policies\Get\PoliciesItem\PoliciesItemSignatureResponse $signature;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
