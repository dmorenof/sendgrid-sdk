<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\ApiKeys;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public string $api_key;
    public string $api_key_id;
    public string $name;
    public \SendGridSDK\Collections\StringCollection $scopes;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'api_key' => is_string($value) ? $this->api_key = $value : parent::assignMember($name, $value),
            'api_key_id' => is_string($value) ? $this->api_key_id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'scopes' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->scopes = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
