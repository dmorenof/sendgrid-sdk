<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\SendIps\Ips\Get\Metadata;

final class NextParamsResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Specifies which items to be returned by the API. When the `after_key` is specified, the API will return items beginning from the first item after the item specified. This parameter can be used in combination with `limit` to iterate through paginated results. The `after_key` cannot be used in combination with the `before_key` parameter.
     */
    public ?string $after_key;
    /**
     * Specifies which items to be returned by the API. When the `before_key` is specified, the API will return items beginning from the first item before the item specified. This parameter can be used in combination with `limit` to iterate through paginated results. The `before_key` cannot be used in combination with the `after_key` parameter.
     */
    public ?string $before_key;
    /**
     * The end of the time window specified in the request with the `end_added_at` query parameter. This parameter is returned only when the `end_added_at` parameter is included in the request.
     */
    public string $end_added_at;
    /**
     * Indicates whether or not to include the IP address's region. This property will only be returned if the `include_region` query parameter is included and set to `true` as part of the API request.
     */
    public string $include_region;
    /**
     * The IP address specified in the request with the `ip` query parameter. This parameter is returned only when an IP is included in the request.
     */
    public string $ip;
    /**
     * Indicates if the IP address is billed and able to send email. This parameter applies to non-Twilio SendGrid APIs that been added to your Twilio SendGrid account. This parameter's value is `null` for Twilio SendGrid IP addresses. This parameter is returned only if the IP address is enabled.
     */
    public bool $is_enabled;
    /**
     * Indicates whether an IP address is leased from Twilio SendGrid. If `false`, the IP address is not a Twilio SendGrid IP; it is a customer's own IP that has been added to their Twilio SendGrid account. This parameter is returned only if the IP address is leased.
     */
    public bool $is_leased;
    /**
     * Indicates if a parent on the account is able to send email from the IP address. This parameter is returned only if the IP address is parent assigned.
     */
    public bool $is_parent_assigned;
    /**
     * The number of items returned in the request. This parameter is returned only when a `limit` is set using the `limit` query parameter in the request.
     */
    public string $limit;
    /**
     * The IP Pool ID specified in the request with the `pool` query parameter. This parameter is returned only when an IP Pool is included in the request.
     */
    public string $pool;
    /**
     * The region to which the IP address is assigned. This property will only be returned if the `include_region` query parameter is included and set to `true` as part of the API request,
     */
    public \SendGridSDK\Enums\Ip\AddressManagementRegion1 $region;
    /**
     * The beginning of the time window specified in the request with the `start_added_at` query parameter. This parameter is returned only when the `start_added_at` parameter is included in the request.
     */
    public string $start_added_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'after_key' => $value === null || is_string($value) ? $this->after_key = $value : parent::assignMember($name, $value),
            'before_key' => $value === null || is_string($value) ? $this->before_key = $value : parent::assignMember($name, $value),
            'end_added_at' => is_string($value) ? $this->end_added_at = $value : parent::assignMember($name, $value),
            'include_region' => is_string($value) ? $this->include_region = $value : parent::assignMember($name, $value),
            'ip' => is_string($value) ? $this->ip = $value : parent::assignMember($name, $value),
            'is_enabled' => is_bool($value) ? $this->is_enabled = $value : parent::assignMember($name, $value),
            'is_leased' => is_bool($value) ? $this->is_leased = $value : parent::assignMember($name, $value),
            'is_parent_assigned' => is_bool($value) ? $this->is_parent_assigned = $value : parent::assignMember($name, $value),
            'limit' => is_string($value) ? $this->limit = $value : parent::assignMember($name, $value),
            'pool' => is_string($value) ? $this->pool = $value : parent::assignMember($name, $value),
            'region' => is_string($value) ? $this->region = \SendGridSDK\Enums\Ip\AddressManagementRegion1::from($value) : parent::assignMember($name, $value),
            'start_added_at' => is_string($value) ? $this->start_added_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
