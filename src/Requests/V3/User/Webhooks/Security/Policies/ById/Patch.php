<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\User\Webhooks\Security\Policies\ById;

final class Patch extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * User-defined policy name
     */
    public string $name;
    public \SendGridSDK\Requests\V3\User\Webhooks\Security\Policies\ById\Patch\ByIdOauthRequest $oauth;
    public \SendGridSDK\Requests\V3\User\Webhooks\Security\Policies\ById\Patch\ByIdSignatureRequest $signature;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
