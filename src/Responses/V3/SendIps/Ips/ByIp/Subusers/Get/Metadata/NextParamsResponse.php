<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\SendIps\Ips\ByIp\Subusers\Get\Metadata;

/**
 * A collection of fields that can be used to work the endpoint.
 */
final class NextParamsResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Specifies which items to be returned by the API. When the `after_key` is specified, the API will return items beginning from the first item after the item specified. This parameter can be used in combination with `limit` to iterate through paginated results. The `after_key` cannot be used in combination with the `before_key` parameter.
     */
    public ?string $after_key;
    /**
     * The `limit` specified in the request. This parameter will be included only if it was specified in the request. This is not the default limit enforced by the API.
     */
    public string $limit;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'after_key' => $value === null || is_string($value) ? $this->after_key = $value : parent::assignMember($name, $value),
            'limit' => is_string($value) ? $this->limit = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
