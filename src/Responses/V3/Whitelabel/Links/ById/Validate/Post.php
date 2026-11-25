<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Whitelabel\Links\ById\Validate;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
        'valid',
        'validation_results',
    ];

    protected const array VALIDATION = [
        'valid' => [
            'jsonSchema' => '{"enum":[false,true]}',
        ],
    ];

    /**
     * The ID of the branded link.
     */
    public int $id;
    /**
     * Indicates if the link branding is valid.
     */
    public bool $valid {
        set {
            $this->assigning('valid', $value);
            $this->valid = $value;
        }
    }
    /**
     * The individual validation results for each of the DNS records associated with this branded link.
     */
    public \SendGridSDK\Responses\V3\Whitelabel\Links\ById\Validate\Post\ValidationResultsResponse $validation_results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'valid' => is_bool($value) ? $this->valid = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
