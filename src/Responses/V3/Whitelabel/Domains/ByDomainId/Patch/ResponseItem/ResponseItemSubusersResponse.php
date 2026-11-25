<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Whitelabel\Domains\ByDomainId\Patch\ResponseItem;

final class ResponseItemSubusersResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The ID of the subuser that this authenticated domain will be associated with.
     */
    public int $user_id;
    /**
     * The username of the subuser that this authenticated domain is associated with.
     */
    public string $username;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'user_id' => is_int($value) ? $this->user_id = $value : parent::assignMember($name, $value),
            'username' => is_string($value) ? $this->username = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
