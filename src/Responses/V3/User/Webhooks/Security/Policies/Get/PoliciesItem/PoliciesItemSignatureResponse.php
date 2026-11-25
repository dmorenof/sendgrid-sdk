<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\User\Webhooks\Security\Policies\Get\PoliciesItem;

final class PoliciesItemSignatureResponse extends \Dmorenof\SdkRuntime\DTO
{
    public string $public_key;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'public_key' => is_string($value) ? $this->public_key = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
