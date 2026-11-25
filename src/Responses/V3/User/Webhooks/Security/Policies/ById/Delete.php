<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\User\Webhooks\Security\Policies\ById;

final class Delete extends \Dmorenof\SdkRuntime\DTO
{
    public ?string $policy;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'policy' => $value === null || is_string($value) ? $this->policy = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
