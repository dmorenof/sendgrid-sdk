<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Teammates\ByTeammateName\SubuserAccess\Get\Metadata;

final class NextParamsResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The `after_subuser_id` property represents the last processed Subuser. If the `after_subuser_id` property is `null`, there are no more entries available.
     */
    public int $after_subuser_id;
    /**
     * The limit specified in the `limit` query parameter to constrain the number of Subusers returned.
     */
    public int $limit;
    /**
     * The username of a Subuser passed in the `name` query parameter to filter results by username.
     */
    public string $username;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'after_subuser_id' => is_int($value) ? $this->after_subuser_id = $value : parent::assignMember($name, $value),
            'limit' => is_int($value) ? $this->limit = $value : parent::assignMember($name, $value),
            'username' => is_string($value) ? $this->username = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
