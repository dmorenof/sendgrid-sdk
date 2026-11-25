<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\User\Webhooks\Security\Policies\ById\Patch;

final class ByIdSignatureRequest extends \Dmorenof\SdkRuntime\DTO
{
    public bool $enabled;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
