<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Whitelabel\Domains\ById\Validate;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The ID of the authenticated domain.
     */
    public int $id;
    /**
     * Indicates if this is a valid authenticated domain.
     */
    public bool $valid;
    /**
     * The individual DNS records that are checked when validating, including the reason for any invalid DNS records.
     */
    public \SendGridSDK\Responses\V3\Whitelabel\Domains\ById\Validate\Post\ValidationResultsResponse $validation_results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'valid' => is_bool($value) ? $this->valid = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
