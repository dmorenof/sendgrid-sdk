<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\ApiKeys;

/**
 * Example: {"name":"My API Key","scopes":["mail.send","alerts.create","alerts.read"]}
 */
final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'name',
    ];

    /**
     * The name you will use to describe this API Key.
     */
    public string $name;
    /**
     * The individual permissions that you are giving to this API Key.
     */
    public \SendGridSDK\Collections\StringCollection $scopes;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'scopes' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->scopes = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
