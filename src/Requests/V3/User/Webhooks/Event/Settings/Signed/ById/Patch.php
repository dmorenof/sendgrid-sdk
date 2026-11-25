<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\User\Webhooks\Event\Settings\Signed\ById;

final class Patch extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'enabled',
    ];

    /**
     * Enable or disable the webhook by setting this property to `true` or `false`, respectively.
     */
    public bool $enabled;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
